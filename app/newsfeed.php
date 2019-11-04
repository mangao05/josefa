<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class newsfeed extends Model
{
    use Softdeletes;
    protected $table = 'newsfeeds';
    protected $fillable = ['img', 'newsfeed_title','newsfeed_text'];
    protected $dates  =['delete_at'];
}
