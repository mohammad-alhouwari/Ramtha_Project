<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'preview_image',
        'preview_image2',
        'date',
        'value',
        'status',

    ];
}
