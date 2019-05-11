<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model //A vote. The noun, not the verb
{

    public function award_category() {
        return $this->belongsTo('App\AwardCategory');
    }

    public function candidate() {
        return $this->belongsTo('App\Applicant');
    }
}
