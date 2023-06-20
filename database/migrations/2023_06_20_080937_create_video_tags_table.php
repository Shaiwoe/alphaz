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
        Schema::create('video_tags', function (Blueprint $table) {
            $table->foreignId('tag_id');
            $table->foreign('tag_id')->references('id')->on('tavs')->onDelete('cascade');

            $table->foreignId('video_id');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');

            $table->primary(['tag_id' , 'video_id']);
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
        Schema::dropIfExists('video_tags');
    }
};
