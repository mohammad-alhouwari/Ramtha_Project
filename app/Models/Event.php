<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'preview_image',
        'title',
        'description',
        'capacity',
        'date',
        'time',
        'location',
        'map_x',
        'map_y',
        'status',
    ];

    public function participants()
    {
        return $this->hasMany(EventParticipant::class, 'event_id');
=======

    public function media()
    {
        return $this->hasMany(Media::class, 'event_id');
>>>>>>> 705c2847c769499fa843cabaa8bc426293236797
    }
}
