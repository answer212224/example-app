<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('SourceAccount');
            $table->string('PointCardID');
            $table->string('SourceMerchantTradeNo');
            $table->string('SourceMerchantTradeDate');
            $table->string('SourceStoreID');
            $table->string('SourceStoreName');
            $table->integer('TradeAmount');
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
        Schema::dropIfExists('points');
    }
}
