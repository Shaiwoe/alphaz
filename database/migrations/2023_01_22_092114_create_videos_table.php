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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('catevory_id');
            $table->foreign('catevory_id')->references('id')->on('catevorys')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->string('type');
            $table->text('description');
            $table->text('body');
            $table->string('image');
            $table->string('video');
            $table->string('time')->default('00:00:00');
            $table->string('tags');
            $table->boolean('is_active')->default(1);

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
        Schema::dropIfExists('videos');
    }
};
