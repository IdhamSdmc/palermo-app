<?php

namespace App\Repositories\Setting;
use App\Repositories\RepositoryInterface;

/**
 * Interface SettingInterface.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
interface SettingInterface extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getSettings();
}
