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
        Schema::create('book_tags', function (Blueprint $table) {
            $table->foreignId('tag_id');
            $table->foreign('tag_id')->references('id')->on('tabs')->onDelete('cascade');

            $table->foreignId('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->primary(['tag_id' , 'book_id']);
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
        Schema::dropIfExists('book_tags');
    }
};
