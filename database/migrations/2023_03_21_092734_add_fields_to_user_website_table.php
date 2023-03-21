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
        Schema::table('user_website', function (Blueprint $table) {
            $table->string('css_files')->nullable()->default(null);
            $table->string('js_files')->nullable()->default(null);
            $table->bigInteger('plan_id')->nullable()->default(0);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_website', function (Blueprint $table) {
            //
        });
    }
};
