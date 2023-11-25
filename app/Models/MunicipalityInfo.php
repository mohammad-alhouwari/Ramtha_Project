<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunicipalityInfo extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'logo',
        'description',
        'description_image',
        'phone',
        'email',
    ];
}
