<?php

namespace App\Repositories\Setting;

/**
 * Class AbstractSettingDecorator.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
abstract class AbstractSettingDecorator implements SettingInterface
{
    /**
     * @var SettingInterface
     */
    protected $setting;

    /**
     * @param SettingInterface $setting
     */
    public function __construct(SettingInterface $setting)
    {
        $this->setting = $setting;
    }

    /**
     * @return mixed
     */
    public function getSettings()
    {
        return $this->setting->getSettings();
    }
     /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->setting->find($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->setting->all();
    }

    /**
     * @param null $perPage
     * @param bool $all
     *
     * @return mixed
     */
    public function paginate($page = 1, $limit = 10, $all = false)
    {
        return $this->setting->paginate($page, $limit, $all);
    }
}
