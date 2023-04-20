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
            $table->dropColumn('website_html');
            $table->dropColumn('website_variable');
            $table->longText('web_html')->nullable()->default(null);
            $table->text('web_variable')->nullable()->default(null);

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
