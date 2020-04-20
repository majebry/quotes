<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote', 'author', 'source'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
