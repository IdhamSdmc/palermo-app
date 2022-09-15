<?php

namespace App\Repositories\Footer;

/**
 * Class AbstractFooterDecorator.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
abstract class AbstractFooterDecorator implements FooterInterface
{
    /**
     * @var FooterInterface
     */
    protected $footer;

    /**
     * @param FooterInterface $footer
     */
    public function __construct(FooterInterface $footer)
    {
        $this->footer = $footer;
    }

    /**
     * @return mixed
     */
    public function getFooters()
    {
        return $this->footer->getFooters();
    }
     /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->footer->find($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->footer->all();
    }

    /**
     * @param null $perPage
     * @param bool $all
     *
     * @return mixed
     */
    public function paginate($page = 1, $limit = 10, $all = false)
    {
        return $this->footer->paginate($page, $limit, $all);
    }
}
