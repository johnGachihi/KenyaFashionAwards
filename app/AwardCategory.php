<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwardCategory extends Model
{
    protected $table = 'award_categories';

    public function application(){
        return $this->hasMany('app\application');
    }
}
