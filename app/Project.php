<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function involvedProjects(){
        return $this->hasMany('App\InvolvedProjects');
    }
    public function learnts()
    {
        return $this->belongsTo('App\Learnt', 'project_id');   // a genre has many records
    }
    public function softskills()
    {
        return $this->belongsTo('App\Softskills','project_id');   // a genre has many records
    }
    public function involvements()
    {
        return $this->belongsTo('App\Involvement');   // a genre has many records
    }
    public function hardkills()
    {
        return $this->belongsTo('App\Hardkills');   // a genre has many records
    }
}
