<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable(); 
            $table->text('local')->nullable();             
            $table->text('name')->nullable(); 
            $table->text('to')->nullable(); 
            $table->text('adult')->nullable();
            $table->text('iconsvg')->nullable();
            $table->text('icon')->nullable(); 
            $table->text('color')->nullable();
            $table->text('background_color')->nullable(); 
            $table->text('seo_title')->nullable();
            $table->text('seo_keywords')->nullable(); 
            $table->longText('seo_description')->nullable();
            $table->integer('views')->nullable()->default(0);   
            $table->text('status')->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category');
    }
}
