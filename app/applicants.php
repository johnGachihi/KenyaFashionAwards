<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicants extends Model
{
    public function application(){
        return $this->hasOne('app\application');
    }
}
