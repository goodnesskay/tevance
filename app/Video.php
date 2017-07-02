<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=['video_title','video_author','group_for_video','short_description','created_by'];
}
