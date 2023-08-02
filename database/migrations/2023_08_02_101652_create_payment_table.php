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
        Schema::create('payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('memorial_id')->nullable()->default(0);
            $table->bigInteger('package_id')->nullable()->default(0);
            $table->string('payment_id')->nullable()->default(null);
            $table->text('payment_response')->nullable()->default(null);
            $table->string('status')->nullable()->default('pending');
            $table->float('amount')->nullable()->default(0);
            $table->string('card_type',50)->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
};
