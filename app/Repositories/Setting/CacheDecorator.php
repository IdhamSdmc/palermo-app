<?php

namespace App\Repositories\Setting;

use App\Services\Cache\CacheInterface;

/**
 * Class CacheDecorator.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class CacheDecorator extends AbstractSettingDecorator
{
    /**
     * @var \App\Services\Cache\CacheInterface
     */
    protected $cache;

    /**
     * Cache key.
     *
     * @var string
     */
    protected $cacheKey = 'setting';

    /**
     * @param SettingInterface $setting
     * @param CacheInterface   $cache
     */
    public function __construct(SettingInterface $setting, CacheInterface $cache)
    {
        parent::__construct($setting);
        $this->cache = $cache;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getSettings()
    {
        $key = md5($this->cacheKey.'settings');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $setting = $this->setting->getSettings();

        $this->cache->put($key, $setting);

        return $setting;
    }
    public function all()
    {
        $key = md5($this->cacheKey.'.all');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $setting = $this->setting->all();

        $this->cache->put($key, $setting);

        return $setting;
    }

    /**
     * @param null $page
     * @param bool $all
     *
     * @return mixed
     */
    public function paginate($page = 1, $limit = 10, $all = false)
    {
        $allkey = ($all) ? '.all' : '';
        $key = md5($this->cacheKey.'.page.'.$page.'.'.$limit.$allkey);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $paginated = $this->setting->paginate($page, $limit, $all);

        $this->cache->put($key, $paginated);

        return $paginated;
    }

    /**
     * @param $tag
     *
     * @return mixed|void
     */
    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        $key = md5($this->cacheKey.'.id.'.$id);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $setting = $this->setting->find($id);

        $this->cache->put($key, $setting);

        return $setting;
    }

    public function create($id)
    {   $var= implode(' ', $id);
        $key = md5($this->cacheKey.'.id.'.$var);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $setting = $this->setting->create($id);

        $this->cache->put($key, $setting);

        return $setting;
    }
}
