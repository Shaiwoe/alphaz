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
        Schema::table('users', function (Blueprint $table) {
            $table->string('cellphone')->nullable();
            $table->string('brith')->nullable();
            $table->string('gender')->nullable();
            $table->string('wallet_bit')->nullable();
            $table->string('wallet_usdt')->nullable();
            $table->string('wallet_usdc')->nullable();
            $table->string('wallet_eth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cellphone');
            $table->dropColumn('brith');
            $table->dropColumn('gender');
            $table->dropColumn('wallet_bit');
            $table->dropColumn('wallet_usdt');
            $table->dropColumn('wallet_usdc');
            $table->dropColumn('wallet_eth');
        });
    }
};
