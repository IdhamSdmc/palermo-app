<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class Setting extends Model
{
    public $table = 'setting';
    public $fillable = ['title', 'lang'];
}
