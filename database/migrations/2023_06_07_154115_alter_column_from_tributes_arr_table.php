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
        Schema::table('tributes_arr', function (Blueprint $table) {
            $table->dropColumn('details_show_var');
        });
        Schema::table('tributes_arr', function (Blueprint $table) {
            $table->longText('details_show_var')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tributes_arr', function (Blueprint $table) {
            //
        });
    }
};
