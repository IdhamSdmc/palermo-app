<?php

namespace App\Repositories\Footer;

use App\Services\Cache\CacheInterface;

/**
 * Class CacheDecorator.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class CacheDecorator extends AbstractFooterDecorator
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
    protected $cacheKey = 'footer';

    /**
     * @param FooterInterface $footer
     * @param CacheInterface   $cache
     */
    public function __construct(FooterInterface $footer, CacheInterface $cache)
    {
        parent::__construct($footer);
        $this->cache = $cache;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getFooters()
    {
        $key = md5($this->cacheKey.'footers');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $footer = $this->footer->getFooters();

        $this->cache->put($key, $footer);

        return $footer;
    }
    public function all()
    {
        $key = md5($this->cacheKey.'.all');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $footer = $this->footer->all();

        $this->cache->put($key, $footer);

        return $footer;
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

        $paginated = $this->footer->paginate($page, $limit, $all);

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

        $footer = $this->footer->find($id);

        $this->cache->put($key, $footer);

        return $footer;
    }

    public function create($id)
    {   $var= implode(' ', $id);
        $key = md5($this->cacheKey.'.id.'.$var);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $footer = $this->footer->create($id);

        $this->cache->put($key, $footer);

        return $footer;
    }
}
