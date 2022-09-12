<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;
    public $table = 'historias';
    protected $fillable = ['titulo', 'reto', 'solucion', 'resultado', 'file_name', 'file_size'];
}
