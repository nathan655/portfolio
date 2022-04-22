<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvolvedProjects extends Model
{
    public function involveds()
    {
        return $this->belongsTo('App\Involved');   // an order has many orderlines
    }
    public function projects(){
        return $this->belongsTo('App\Project');
    }
}
