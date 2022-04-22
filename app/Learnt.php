<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learnt extends Model
{
    public function projects (){
        return $this->belongsTo('App\Project');
    }
}
