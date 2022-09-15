<?php

namespace App\Composers;

use App\Models\Footer;
use App\Repositories\Footer\FooterInterface;

/**
 * Class FooterComposer.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class FooterComposer
{
    /**
     * @var \App\Repositories\Footer\FooterInterface
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
     * @param $view
     */
    public function compose($view)
    {
        $footers = $this->footer->getFooters();
        //dd( $footers );
        $view->with('footers', $footers);
    }
}
