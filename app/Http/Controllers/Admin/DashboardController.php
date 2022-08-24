<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class DashboardController extends Controller
{
    public function index()
    {
        return view('/admin/backend/layout/dashboard')->with('active', 'home');
    }
}
