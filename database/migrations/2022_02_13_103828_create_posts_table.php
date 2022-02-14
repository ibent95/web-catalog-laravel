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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->string('post_slug', 100);
            $table->string('title', 100);
            $table->text('content')->nullable();
            $table->boolean('publish_flag')->default(FALSE);
            $table->dateTime('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
