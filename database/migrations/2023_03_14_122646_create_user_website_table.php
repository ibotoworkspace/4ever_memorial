<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_website', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('website_user_id')->nullable()->default(0);
            $table->longText('website_html')->nullable()->default(null);
            $table->text('website_variable')->nullable()->default(null);
            $table->bigInteger('website_template_id')->nullable()->default(0);
            $table->string('tribute')->nullable()->default(null);

            // memorial form fields
                // 1 tab
                    $table->string('f_name')->nullable()->default(null);
                    $table->string('m_name')->nullable()->default(null);
                    $table->string('l_name')->nullable()->default(null);
                    $table->string('gender')->nullable()->default(null);
                    $table->string('relation')->nullable()->default(null);
                    $table->string('memorial_designation')->nullable()->default(null);
                    $table->string('b_year')->nullable()->default(null);
                    $table->string('b_month')->nullable()->default(null);
                    $table->string('b_day')->nullable()->default(null);
                    $table->string('b_city')->nullable()->default(null);
                    $table->string('b_state')->nullable()->default(null);
                    $table->string('b_country')->nullable()->default(null);
                    $table->string('p_year')->nullable()->default(null);
                    $table->string('p_month')->nullable()->default(null);
                    $table->string('p_day')->nullable()->default(null);
                    $table->string('p_city')->nullable()->default(null);
                    $table->string('p_state')->nullable()->default(null);
                    $table->string('p_country')->nullable()->default(null);
                    $table->string('email')->nullable()->default(null);
                // 1 tab

                // 2 tab
                    $table->string('ad_name')->nullable()->default(null);
                    $table->string('ad_lastname')->nullable()->default(null);
                    $table->string('ad_email')->nullable()->default(null);
                    $table->string('ad_pwd')->nullable()->default(null);
                // 2 tab

                // 3 tab
                    $table->string('visible_to_all')->nullable()->default(null);
                // 3 tab
                
            //memorial form fields
            
            $table->softDeletes();
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
        Schema::dropIfExists('user_website');
    }
};
