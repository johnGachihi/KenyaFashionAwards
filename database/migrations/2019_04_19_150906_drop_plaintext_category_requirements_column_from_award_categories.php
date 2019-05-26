<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPlaintextCategoryRequirementsColumnFromAwardCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('award_categories', function (Blueprint $table) {
            $table->dropColumn('Category_Requirements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('award_categories', function (Blueprint $table) {
            $table->longText('Category_Requirements');
        });
    }
}
