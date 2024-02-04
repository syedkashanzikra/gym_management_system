<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainers extends Model
{
    use HasFactory;
 
//  protected $guarded = [];
     protected $fillable = [
        'trainer_name',
        'trainer_email',
        'trainer_phone',
        'trainer_address',
        'trainer_facebook',
        'trainer_instagram',
        'trainer_twitter',
        'trainer_age',
        'trainer_cnic',
        'trainer_birthdate',
         'trainer_image',
    ];
}
