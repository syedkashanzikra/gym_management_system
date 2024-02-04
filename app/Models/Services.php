<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_first_package_name',
        'service_first_package',
        'service_first_package_description',
        'trainer_phone',
        'service_second_package',
        'service_second_package_description',
        'service_third_package_name',
        'service_third_package',
        'service_third_package_description',
        'service_fourth_package_name',
        'service_fourth_package',
        'service_fourth_package_description',
        'service_link',
        'service_trainer',
        'service_image',
    ];
}
