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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('forum_id');
            $table->timestamps();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('forum_id')->references('id')->on('forums');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
