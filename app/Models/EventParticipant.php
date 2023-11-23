<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'name',
        'phone',
        'email',
        'event_id',
    ];

    public function Event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
