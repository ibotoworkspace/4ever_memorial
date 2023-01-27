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
        Schema::create('website_template', function (Blueprint $table) {
            $table->id();
            $table->longText('website_html')->nullable()->default(0);
            $table->text('website_variable')->nullable()->default(null);
            $table->text('tribute')->nullable()->default(null);
            $table->text('life')->nullable()->default(null);
            $table->text('stories')->nullable()->default(null);
            $table->text('gallery')->nullable()->default(null);
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
        Schema::dropIfExists('website_template');
    }
};
