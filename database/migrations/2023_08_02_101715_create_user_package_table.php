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
        Schema::create('user_package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('memorial_id')->nullable()->default(0);
            $table->bigInteger('package_id')->nullable()->default(0);

            $table->string('secure_access')->nullable()->default(null);
            $table->string('decease_bio')->nullable()->default(null);
            $table->string('flower_donation')->nullable()->default(null);
            $table->string('image_gallery')->nullable()->default(null);
            $table->string('automated_anniversary_reminder')->nullable()->default(null);
            $table->string('virtual_anniversary')->nullable()->default(null);
            $table->string('tribute_notes')->nullable()->default(null);
            $table->string('tribute_page')->nullable()->default(null);
            $table->string('grave_img')->nullable()->default(null);
            $table->string('link_to_grave_site')->nullable()->default(null);
            $table->string('link_to_relative_page')->nullable()->default(null);
            $table->string('link_wife_to_husband')->nullable()->default(null);
            $table->string('merge_wife_and_husband')->nullable()->default(null);
            $table->string('dedicated_page')->nullable()->default(null);
            $table->string('search_by_name')->nullable()->default(null);
           
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
        Schema::dropIfExists('user_package');
    }
};
