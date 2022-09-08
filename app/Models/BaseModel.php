<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class BaseModel extends Model
{
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($query) use ($search) {

            $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('content', 'LIKE', "%$search%");
        });
    }
}
