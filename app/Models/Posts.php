<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'data',
        'category_id',
        'project_title',
        'project_image',
        'project_description',
        'template_name'
    ];

    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
