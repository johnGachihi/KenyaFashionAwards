<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Changes the settings in the database
    protected $table ='articles';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
