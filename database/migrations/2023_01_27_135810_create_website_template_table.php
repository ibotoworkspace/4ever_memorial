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
            $table->string('name',100)->nullable()->default(null);
            $table->longText('web_html')->nullable()->default(null);
            $table->text('web_variable')->nullable()->default(null);
            $table->text('variable_html')->nullable()->default(null);
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
