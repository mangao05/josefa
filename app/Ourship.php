<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Ourship extends Model
{
    use Softdeletes;
    protected $table = 'ourships';
    protected $fillable = ['ship_img','ship_name','hull_number','LOA','BREADTH','DEPTH','DRAFT','POWER','SPEED','HULL','CLASS','YEAR_BUILT','REGISTER'];
    protected $dates  =['delete_at'];
}

