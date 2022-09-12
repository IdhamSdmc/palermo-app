<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public $table = 'marcas';
    protected $fillable = ['marca', 'path', 'file_name', 'file_size'];
}
