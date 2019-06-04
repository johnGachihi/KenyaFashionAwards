<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function application(){
        return $this->hasOne('App\Application');
    }
}
