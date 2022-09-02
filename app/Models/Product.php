<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Interfaces\ModelInterface as ModelInterface;

class Product extends BaseModel implements ModelInterface
{
    use Sluggable;
    public $table = 'products';
    protected $fillable = ['titulo', 'descripcion', 'path', 'file_name', 'file_size'];
    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        // TODO: Implement setUrlAttribute() method.
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        // TODO: Implement getUrlAttribute() method.
        return 'product/'.$this->attributes['slug'];
    }

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug' => [
                'source'         => 'title',
                'separator'      => '-',
                'includeTrashed' => true,
            ]
        ];
    }
}
