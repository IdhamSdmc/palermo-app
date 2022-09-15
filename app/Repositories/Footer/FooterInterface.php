<?php

namespace App\Repositories\Footer;
use App\Repositories\RepositoryInterface;

/**
 * Interface FooterInterface.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
interface FooterInterface extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getFooters();
}
