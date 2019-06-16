<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 05/05/2019
 * Time: 17:40
 */

namespace App\Http\Controllers;

use App\AwardCategory;
use App\ChartsPreference;
use App\Events\VoteCast;
use Illuminate\Http\Request;
use App\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VotesController extends Controller
{

    public function cast(Request $request) {
        $request->validate([
            'award_category' => 'required',
            'applicant' => 'required'
        ]);

        $vote = new Vote();
        $vote->award_category_id = $request->input('award_category');
        $vote->candidate_id = $request->input('applicant');
        $vote->save();

        event(new \App\Events\TestEvent($vote->candidate));
        event(new VoteCast($vote));

        return response()->json(
            $this->getVotesDataByAwardCategories()
        );
    }

    public function view() {
        $votes_per_category = $this->getVotesDataByAwardCategories();
        $categories = AwardCategory::all();
//        $chartsPreferences = ChartsPreference::select('preferences')->find(Auth::user()->id);

        return view('admin.vote_stats', [
            'categories' => $categories,
            'votes_per_category' => $votes_per_category,
//            'chartsPreferences' => $chartsPreferences
        ]);
    }

    private function getVotesDataByAwardCategories() {
        $voteData = Vote::rightJoin('award_categories', 'award_categories.id', '=', 'votes.award_category_id')
            ->join('applicants', 'applicants.id', '=', 'votes.candidate_id')
            ->selectRaw('votes.award_category_id, award_categories.category_title, votes.candidate_id, applicants.name, COUNT(votes.award_category_id) AS votes')
            ->groupBy('votes.candidate_id')
            ->get();

        $votes_by_category = [];
        foreach($voteData as $vote) {
            $votes_by_category[$vote['category_title']]['category_id'] = $vote['award_category_id'];
            $votes_by_category[$vote['category_title']]['candidate_ids'][] = $vote['candidate_id'];
            $votes_by_category[$vote['category_title']]['candidates'][] = $vote['name'];
            $votes_by_category[$vote['category_title']]['votes'][] = $vote['votes'];
            if(!isset($votes_by_category[$vote['category_title']]['total'])) {
                $votes_by_category[$vote['category_title']]['total'] = $vote['votes'];
            } else {
                $votes_by_category[$vote['category_title']]['total'] += $vote['votes'];
            }
        }

//        return $voteData;
        return $votes_by_category;
    }

}