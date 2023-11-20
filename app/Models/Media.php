<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = "media";

    protected $fillable = [
        'media',
        'media_type',
        'event_id',
        'news_id',
        'project_id',
        'landmark_id',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }


    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }


    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
