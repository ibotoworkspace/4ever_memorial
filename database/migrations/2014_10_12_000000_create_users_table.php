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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable()->default(null);
            $table->string('middle_name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('relationship')->nullable()->default(null);
            $table->string('memorial_designation')->nullable()->default(null);
            $table->string('born')->nullable()->default(null);
            $table->string('passed_away')->nullable()->default(null);
            $table->string('adderss', 250)->nullable()->default(null);
            $table->string('url', 250)->nullable()->default(null);
            $table->string('password',250)->nullable()->default(null);
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
