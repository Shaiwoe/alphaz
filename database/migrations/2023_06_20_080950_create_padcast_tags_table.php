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
        Schema::create('padcast_tags', function (Blueprint $table) {
            $table->foreignId('tag_id');
            $table->foreign('tag_id')->references('id')->on('taps')->onDelete('cascade');

            $table->foreignId('padcast_id');
            $table->foreign('padcast_id')->references('id')->on('padcasts')->onDelete('cascade');

            $table->primary(['tag_id' , 'padcast_id']);
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
        Schema::dropIfExists('padcast_tags');
    }
};
