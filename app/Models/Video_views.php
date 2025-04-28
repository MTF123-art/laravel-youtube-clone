<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video_views extends Model
{
    protected $fillable = [
        'user_id',
        'video_id',
        'viewed_at',
    ];
    public function video()
    {
        return $this->belongsTo(Video::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
