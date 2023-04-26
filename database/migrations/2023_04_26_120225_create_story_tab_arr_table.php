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
        Schema::create('story_tab_arr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('memorial_id')->nullable()->default(0);
            $table->string('user_name_show_var')->nullable()->default(null);
            $table->string('date_show_var')->nullable()->default(null);
            $table->string('image_show_var')->nullable()->default(null);
            $table->string('details_show_var')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_tab_arr');
    }
};
