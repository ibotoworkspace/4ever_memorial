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
            $table->id();
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('website_user_id')->nullable()->default(0);
            $table->bigInteger('website_template_id')->nullable()->default(0);
            $table->longText('website_html')->nullable()->default(0);
            $table->text('website_variable')->nullable()->default(null);
            $table->string('tribute')->nullable()->default(null);
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
