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

    public function createCategory(Request $request, $id = null) {
        $awardCategory = $id == null ? new AwardCategory() : AwardCategory::find($id);
        
        $awardCategory->Category_Title = $request->input('categoryTitle');

        $encodedRichCategoryRequirements = \base64_encode($request->input('richCategoryRequirements'));
        $awardCategory->richCategory_Requirements = $encodedRichCategoryRequirements;

        $awardCategory->save();

        return response()->json([
            'error' => false
        ]);
    }

    public function editAwardCategory(Request $request, $id) {
        $awardCategory = AwardCategory::find($id);

        return view('admin.add_award_category', [
            'category' => $awardCategory
        ]);
    }

    /** This method may be integrated with `createCategory()` */
    public function updateAwardCategory(Request $request, $id) {
        $awardCategory = AwardCategory::find($id);
        $awardCategory->Category_Title = $request->input('categoryTitle');

        $encodedRichCategoryRequirements = \base64_encode($request->input('richCategoryRequirements'));
        $awardCategory->richCategory_Requirements = $encodedRichCategoryRequirements;

        $awardCategory->save();

        return response()->json([
            'error' => false
        ]);
    }

    public function deleteAwardCategory($id) {
        AwardCategory::destroy($id);

        return response()->json([
            'error' => false
        ]);
    }

}
