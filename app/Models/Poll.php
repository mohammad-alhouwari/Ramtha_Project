<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    protected $fillable = [
        'poll_topic_id',
        'rating',
        'national_id',
        'user_message'
    ];

    public function PollTopic()
    {
        return $this->belongsTo(PollTopic::class, 'poll_topic_id');
    }
}
