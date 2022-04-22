<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Involved extends Model
{
    public function involveProjects(){
        return $this->has('App\InvolvedProjects');
    }
}
