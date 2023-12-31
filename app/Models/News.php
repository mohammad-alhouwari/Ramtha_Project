<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'preview_image',
        'date',
        'status',
    ];

    public function media()
    {
        return $this->hasMany(Media::class, 'news_id');
    }
}
