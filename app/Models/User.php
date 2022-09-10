<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class User extends Authenticatable
{
    public $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable =['email','password'];
}
