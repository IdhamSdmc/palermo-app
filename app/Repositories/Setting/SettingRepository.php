<?php

namespace App\Repositories\Setting;

use App\Models\Setting;
use App\Repositories\AbstractValidator as Validator;
use Config;
use Str;
use Event;
use Image;
use File;
/**
 * Class SettingRepository.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class SettingRepository extends Validator implements SettingInterface
{
    /**
     * @var \Setting
     */
    protected $width;
    protected $height;
    protected $thumbWidth;
    protected $thumbHeight;
    protected $imgDir;
    protected $perPage;
    protected $setting;

    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting)
    {      $config = Config::get('fully');
        $this->setting = $setting;
        $this->perPage = $config['per_page'];
        $this->width = $config['modules']['settings']['image_size']['width'];
        $this->height = $config['modules']['settings']['image_size']['height'];
        $this->thumbWidth = $config['modules']['settings']['thumb_size']['width'];
        $this->thumbHeight = $config['modules']['settings']['thumb_size']['height'];
        $this->imgDir = $config['modules']['settings']['image_dir'];
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        $obj = ($this->setting->first()) ?: $this->setting;

        return $obj;
    }
    public function create($settings)
    {

        $this->setting = (Setting::all()->first()) ?: new Setting();


         $this->setting->title=$settings['title'];
            $file = null;

            $file2 = null;

            if (isset($settings['logo'])) {
                $file = $settings['logo'];
            }
            if (isset($settings['favicon'])) {
                $file2 = $settings['favicon'];
            }
            if ($file) {
                $destinationPath = public_path().$this->imgDir;
                $fileName = $file->getClientOriginalName();
                $fileSize = $file->getSize();

                $upload_success = $file->move($destinationPath, $fileName);

                if ($upload_success) {

                    // resizing an uploaded file
                    /*Image::make($destinationPath.$fileName)->resize($this->width, $this->height)->save($destinationPath.$fileName);*/

                    // thumb
                  //  Image::make($destinationPath.$fileName)->resize($this->thumbWidth, $this->thumbHeight)->save($destinationPath.'thumb_'.$fileName);

                    $this->setting->file_name_logo = $fileName;
                    $this->setting->file_size_logo= $fileSize;
                    $this->setting->path_logo = $this->imgDir;
                }
            }
            if ($file2) {
                $destinationPath = public_path().$this->imgDir;
                $fileName = $file2->getClientOriginalName();
                $fileSize = $file2->getSize();

                $upload_success = $file2->move($destinationPath, $fileName);

                if ($upload_success) {

                    // resizing an uploaded file
                    /*Image::make($destinationPath.$fileName)->resize($this->width, $this->height)->save($destinationPath.$fileName);*/

                    // thumb
                   // Image::make($destinationPath.$fileName)->resize($this->thumbWidth, $this->thumbHeight)->save($destinationPath.'thumb_'.$fileName);

                    $this->setting->file_name_favicon = $fileName;
                    $this->setting->file_size_favicon= $fileSize;
                    $this->setting->path_favicon = $this->imgDir;
                }
            }
            //--------------------------------------------------------
            $this->setting->fill($settings)->save();
            
            //Event::fire('article.created', $this->article);

            return true;


    }
   /**
     * @return mixed
     */
    public function all()
    {
        return $this->setting->get();
    }

    /**
     * Get paginated faqs.
     *
     * @param int  $page  Number of faqs per page
     * @param int  $limit Results per page
     * @param bool $all   Show published or all
     *
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function paginate($page = 1, $limit = 10, $all = false)
    {
        $result = new \StdClass();
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->setting->orderBy('created_at', 'DESC');

        $setting = $query->skip($limit * ($page - 1))->take($limit)->get();

        $result->totalItems = $this->totalSetting();
        $result->items = $setting->all();

        return $result;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->setting->findOrFail($id);
    }
    protected function totalSetting()
    {
        return $this->setting->count();
    }
}
