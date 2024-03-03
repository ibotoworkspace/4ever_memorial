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
        Schema::create('life_tab_arr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('memorial_id')->nullable()->default(0);
            $table->string('image_show_var')->nullable()->default(null);
            $table->text('details_show_var')->nullable()->default(null);
            $table->bigInteger('user_id')->nullable()->default(0);
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
        Schema::dropIfExists('life_tab_arr');
    }
};
