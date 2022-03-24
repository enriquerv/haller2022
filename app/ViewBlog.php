<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewBlog extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'image_1',
        'image_2',
        'written_by',
        'available',
    ];

    public function scopeData($query)
    {
        return $query->get($this->select);
    }
}
