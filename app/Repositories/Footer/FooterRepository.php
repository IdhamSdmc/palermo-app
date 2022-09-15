<?php

namespace App\Repositories\Footer;

use App\Models\Footer;
use App\Repositories\AbstractValidator as Validator;
use Config;
use Str;
use Event;
use Image;
use File;
/**
 * Class FooterRepository.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class FooterRepository extends Validator implements FooterInterface
{
    /**
     * @var \Footer
     */
    protected $width;
    protected $height;
    protected $thumbWidth;
    protected $thumbHeight;
    protected $imgDir;
    protected $perPage;
    protected $footer;

    /**
     * @param Footer $footer
     */
    public function __construct(Footer $footer)
    {      $config = Config::get('fully');
        $this->footer = $footer;
        $this->perPage = $config['per_page'];
        $this->width = $config['modules']['footer']['image_size']['width'];
        $this->height = $config['modules']['footer']['image_size']['height'];
        $this->thumbWidth = $config['modules']['footer']['thumb_size']['width'];
        $this->thumbHeight = $config['modules']['footer']['thumb_size']['height'];
        $this->imgDir = $config['modules']['footer']['image_dir'];
    }

    /**
     * @return array
     */
    public function getFooters()
    {
        $obj = (Footer::all()->first()) ?: $this->footer;
        return $obj;
    }
    public function create($footers)
    {
       


    }
   /**
     * @return mixed
     */
    public function all()
    {
        return $this->footer->get();
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

        $query = $this->footer->orderBy('created_at', 'DESC');

        $footer = $query->skip($limit * ($page - 1))->take($limit)->get();

        $result->totalItems = $this->totalFooter();
        $result->items = $footer->all();

        return $result;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->footer->findOrFail($id);
    }
    protected function totalFooter()
    {
        return $this->footer->count();
    }
}
