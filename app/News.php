<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'alias', 'image', 'title', 'preview', 'text', 'date_publish', 'published',
    ];
}
