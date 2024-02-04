<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

  protected $fillable=[

        'Blogger_name',
        'Blog_headline',
        'Blog_headline_picture',
        'Blog_full_description',
        'Blog_category',
        'Blog_hashtags',

    ];
}
