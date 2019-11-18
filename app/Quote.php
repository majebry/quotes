<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Quote extends Model
{
    use HasTags;

    protected $fillable = ['quote', 'author', 'source', 'tags'];
}
