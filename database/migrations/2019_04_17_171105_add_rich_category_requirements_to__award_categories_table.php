<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRichCategoryRequirementsToAwardCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('award_categories', function (Blueprint $table) {
            //
        });

        DB::statement('ALTER TABLE award_categories ADD `richCategory_Requirements` MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('award_categories', function (Blueprint $table) {
            $table->dropColumn('richCategory_Requirements');
        });
    }
}
