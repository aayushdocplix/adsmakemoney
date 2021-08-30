<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeVideoModel extends Model
{
    use HasFactory;
    public $table="youtube_videos";
    public $primaryKey="id";
}
