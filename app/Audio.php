<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable=['audio_title','audio_author','group_for_audio','short_description','created_by'];
}
