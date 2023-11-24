<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'description',
        'end_date',
        'status'
    ];


    public function Poll()
    {
        return $this->hasMany(Poll::class);
    }
}
