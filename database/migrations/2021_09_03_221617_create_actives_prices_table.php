<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivesPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actives_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('active_id');
            $table->float('price');
            $table->date('date');
            $table->timestamps();

            $table->unique(['active_id', 'date']);

            $table->foreign('active_id')->references('id')->on('actives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actives_costs');
    }
}
