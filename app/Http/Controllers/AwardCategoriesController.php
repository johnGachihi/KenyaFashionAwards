<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AwardCategory;
use Illuminate\Support\Facades\Log;

class AwardCategoriesController extends Controller
{
    public function awardCategories() {
        return view('admin.award_categories', [
            'categories' => AwardCategory::all()
        ]);
    }

    public function createCategory(Request $request) {
        $awardCategory = new AwardCategory();
        $awardCategory->Category_Title = $request->input('categoryTitle');
        $awardCategory->Category_Requirements = $request->input('categoryRequirements');

        $awardCategory->save();

        return response()->json([
            'error' => false
        ]);
    }

    // public function save(AwardCategory $category) {

    // }
}
