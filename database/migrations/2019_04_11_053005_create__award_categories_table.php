<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('Award_Categories')) {
            Schema::create('Award_Categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('Category_Title');
                $table->longText('Category_Requirements');
                $table->timestamps();
            });
        }
        
        DB::table('award_categories')->insert([
            [
                'Category_Title' => 'Fashion Designer',
                'Category_Requirements' => 'Individual who specializes in creating ready to wear/tailor/custom/urban garments for men and/or women. Ready-to-wear clothing is defined as clothing marketed in a finished condition, made in standard sizes/ Individual who makes custom-designed garments made to the client’s measure; especially suits, trousers and jackets/ Individual who specializes in the creation of women’s or men’s urban wear.  Urban clothing is considered casual clothing that caters to the youth and is inspired by the hip-hop culture'
            ],
            [
                'Category_Title' => 'Fashion Photographer',
                'Category_Requirements' => 'Must specialize in the genre of fashion, commercial or related photography'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Award_Categories');
    }
}
