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
        Schema::table('styling', function (Blueprint $table) {
            $table->longText('variable_html')->default(null);
            $table->bigInteger('website_template_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('styling', function (Blueprint $table) {
            $table->longText('variable_html')->default(null);
            $table->bigInteger('website_template_id')->default(null);
        });
    }
};
