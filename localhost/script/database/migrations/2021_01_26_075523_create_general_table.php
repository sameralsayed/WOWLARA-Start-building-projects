<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    { 
        Schema::create('general', function (Blueprint $table) {
            $table->id();
            $table->text('local')->nullable();
            $table->text('group')->nullable();       
            $table->integer('views')->nullable()->default(0);
            $table->text('status')->default('Active');  
            $table->integer('user_id')->nullable(); 
            $table->text('adult')->nullable()->default('No'); 

            $table->text('ads_name')->nullable(); 
            $table->text('ads_title')->nullable(); 
            $table->longText('ads_description')->nullable(); 
            $table->text('ads_sponsored')->nullable();
            $table->text('ads_image_promo')->nullable();
            $table->text('ads_start_date')->nullable(); 
            $table->text('ads_end_date')->nullable();
            $table->text('ads_link')->nullable(); 

            $table->text('user_age')->nullable();
            $table->text('user_gender')->nullable();

            $table->text('noti_cookies_name')->nullable();
            $table->text('noti_title')->nullable(); 
            $table->text('noti_link')->nullable(); 
            $table->longText('noti_message')->nullable(); 
            $table->text('noti_start_date')->nullable();
            $table->text('noti_end_date')->nullable(); 
            $table->text('noti_seconds')->nullable();
            $table->text('noti_color')->nullable(); 
            $table->text('noti_background_color')->nullable();
            $table->text('noti_position')->nullable(); 
            $table->text('noti_icon')->nullable();  
            $table->text('noti_user')->nullable()->default('Active');
            $table->text('noti_guest')->nullable()->default('Active');

            $table->text('code_name')->nullable(); 
            $table->text('code_type')->nullable(); 
            $table->longText('code_code')->nullable();

            $table->text('faq_question')->nullable(); 
            $table->longText('faq_answer')->nullable();

            $table->text('analytic_name')->nullable(); 
            $table->longText('analytic_code')->nullable();

            $table->text('design_color')->nullable(); 

            $table->text('page_name')->nullable();
            $table->longText('page_content')->nullable(); 
            $table->text('page_seo_title')->nullable();
            $table->longText('page_seo_keywords')->nullable(); 
            $table->longText('page_seo_description')->nullable();

            $table->longText('help_title')->nullable(); 
            $table->longText('help_content')->nullable();

            $table->text('login_name')->nullable(); 
            $table->text('login_client_id')->nullable();
            $table->text('login_client_secret')->nullable(); 

            $table->text('social_link_name')->nullable();
            $table->text('social_link_icon')->nullable(); 
            $table->text('social_link_link')->nullable();

            $table->text('theme_name')->nullable(); 
            $table->text('theme_version')->nullable();
            $table->text('theme_auther')->nullable(); 
            $table->text('theme_to')->nullable();
            $table->longText('theme_description')->nullable();
            $table->text('theme_image')->nullable()->default('no-img.png'); 
 
            $table->text('isChrome')->nullable()->default('Active'); 
            $table->text('isFirefox')->nullable()->default('Active'); 
            $table->text('isOpera')->nullable()->default('Active'); 
            $table->text('isSafari')->nullable()->default('Active'); 
            $table->text('isIE')->nullable()->default('Active'); 
            $table->text('isEdge')->nullable()->default('Active'); 
            $table->text('isInApp')->nullable()->default('Active'); 

            $table->text('isDesktop')->nullable()->default('Active'); 
            $table->text('isMobile')->nullable()->default('Active'); 
            $table->text('isTablet')->nullable()->default('Active'); 

            $table->text('isWindows')->nullable()->default('Active'); 
            $table->text('isLinux')->nullable()->default('Active'); 
            $table->text('isMac')->nullable()->default('Active'); 
            $table->text('isAndroid')->nullable()->default('Active');

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
        Schema::dropIfExists('general');
    }
}
