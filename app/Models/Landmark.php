<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    use HasFactory;

    protected $table = "landmarks";

    protected $fillable = [
        'title',
        'description',
        'location',
        'preview_image',
        'status'
    ];

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
