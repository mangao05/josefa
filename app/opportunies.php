<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class opportunies extends Model
{
    use Softdeletes;
    protected $table = 'opportunies';
    protected $fillable = ['oppo_title', 'oppo_text'];
    protected $dates  =['delete_at'];
}

