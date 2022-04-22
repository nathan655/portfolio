<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Involvement extends Model
{
    public function projects (){
        return $this->belongsTo('App\Project')->withDefault();
    }
}
