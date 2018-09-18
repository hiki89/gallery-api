<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_url', 'gallery_id'
    ];

    public function galleries()
    {
        return $this->belongsTo('App\Gallery');
    }
}
