<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Events\ApplicationRespondedToEvent;
use app\applicants;
use app\awardAwardCategory;

class Application extends Model
{

//    protected $dispatchesEvents = [
//        'updated' => ApplicationRespondedToEvent::class
//    ];

    public function applicant() {
        return $this->belongsTo('App\applicants');
    }

    public function award_category() {
        return $this->belongsTo('App\AwardCategory');
    }

}
