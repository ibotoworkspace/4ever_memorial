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
        Schema::create('styling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('template_id')->nullable()->default(0);
            $table->bigInteger('category_id')->nullable()->default(0);
            $table->string('name')->nullable()->default(null);
            $table->longText('web_variable')->default(null);
            $table->string('css_files',1000)->nullable()->default(null);
            $table->string('js_files',1000)->nullable()->default(null);
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
        //
    }
};
