<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;

    protected $table = 'presidents';

    protected $fillable = [
        'name',
        'image',
        'speech'
    ];
}
