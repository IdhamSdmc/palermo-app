<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class Footer extends Model
{
    public $table = 'footer';
    public $fillable = ['correo', 'telefono','redes'];
}
