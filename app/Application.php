<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Events\ApplicationRespondedToEvent;

class Application extends Model
{

//    protected $dispatchesEvents = [
//        'updated' => ApplicationRespondedToEvent::class
//    ];

    public function applicant() {
        return $this->belongsTo('App\Applicant');
    }

    public function award_category() {
        return $this->belongsTo('App\AwardCategory');
    }

}
