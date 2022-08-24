<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class PhotoGallery.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class PhotoGallery extends BaseModel implements ModelInterface
{
    use Sluggable;

    public $table = 'photo_galleries';
    public $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    public function sluggable() {
        return [
            'slug' => [
                'source'         => 'title',
                'separator'      => '-',
                'includeTrashed' => true,
            ]
        ];
    }
    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'relationship', 'type');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'photo-gallery/'.$this->attributes['slug'];
    }
}
