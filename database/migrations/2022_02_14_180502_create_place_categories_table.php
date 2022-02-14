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
        Schema::create('place_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place_category_slug', 100);
            $table->string('place_category_name', 100);
            $table->boolean('active_flag')->default(TRUE);
            $table->string('created_user', 100)->nullable();
            $table->string('updated_user', 100)->nullable();
            $table->timestamps();
            $table->uuid()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_categories');
    }
};
