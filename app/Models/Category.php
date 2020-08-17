<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];


    /**
     * Get the posts associated with category.
     */
    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

}
