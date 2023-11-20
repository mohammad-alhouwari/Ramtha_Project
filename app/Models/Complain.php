<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $table = 'complains';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'national_id',
        'complain_type',
        'address',
        'complain_details',
        'image',
    ];
}
