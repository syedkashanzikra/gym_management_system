<?php




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'Your_name',
        'Your_email',
    ];

    // rest of your model code...
}

