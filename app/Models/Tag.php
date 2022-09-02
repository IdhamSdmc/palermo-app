<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Tag.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class Tag extends Model implements ModelInterface
{
    use Sluggable;


    public $table = 'tags';
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

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'articles_tags');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return '/tag/'.$this->attributes['slug'];
    }
}
