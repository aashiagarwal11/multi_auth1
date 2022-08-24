<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApistoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apistores', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->string('name');
            $table->float('price');
            $table->float('changesPercentage');
            $table->float('change');
            $table->float('dayLow');
            $table->float('dayHigh');
            $table->float('yearHigh');
            $table->float('yearLow');
            $table->float('marketCap');
            $table->float('priceAvg50');
            $table->float('priceAvg200');
            $table->float('volume');
            $table->float('avgVolume');
            $table->float('exchange');
            $table->float('open');
            $table->float('previousClose');
            $table->float('eps');
            $table->float('pe');
            $table->dateTime('earningsAnnouncement');
            $table->bigInteger('sharesOutstanding');
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
        Schema::dropIfExists('apistores');
    }
}
