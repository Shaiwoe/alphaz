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
        Schema::create('metavers', function (Blueprint $table) {
            $table->id();

            $table->string('icon');
            $table->string('name')->nullable();
            $table->string('price_usdt')->nullable();
            $table->string('price_rial')->nullable();
            $table->string('cap')->nullable();
            $table->text('chart')->nullable();
            $table->string('change')->nullable();
            $table->text('body')->nullable();
            $table->string('site')->nullable();
            $table->string('symbol')->nullable();
            $table->string('slug')->nullable();

            $table->integer('status')->default(1);
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
        Schema::dropIfExists('metavers');
    }
};
