<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['book_title','book_author','group_for_book','short_description','created_by'];
}
