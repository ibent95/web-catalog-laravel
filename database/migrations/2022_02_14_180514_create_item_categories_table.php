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
        Schema::create('item_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->bigInteger('id_catalog');
            $table->bigInteger('id_item');
            $table->string('item_category_slug', 100);
            $table->string('item_category_name', 100);
            $table->boolean('active_flag')->default(TRUE);
            $table->string('created_user', 100)->nullable()->default('system');
            $table->string('updated_user', 100)->nullable()->default('system');
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
        Schema::dropIfExists('item_categories');
    }
};
