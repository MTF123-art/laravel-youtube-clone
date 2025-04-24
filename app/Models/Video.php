<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'description', 'video_path', 'thumbnail_path', 'views'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
