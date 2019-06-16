<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Application;

class applicants extends Model
{
    public function Application(){
        return $this->hasMany('App\Application');
    }
}
