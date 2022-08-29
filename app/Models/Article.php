<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Article.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class Article extends BaseModel implements ModelInterface
{
    use Sluggable;


    public $table = 'articles';
    protected $fillable = ['title', 'content', 'meta_keywords', 'meta_description', 'is_published'];
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
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'articles_tags');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'id', 'category_id');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'article/'.$this->attributes['slug'];
    }
}
