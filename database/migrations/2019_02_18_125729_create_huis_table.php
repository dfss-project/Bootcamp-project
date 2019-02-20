<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huis', function (Blueprint $table) {
            $table->increments('id');
            $table->char('steden', 20);
            $table->decimal('prijs', 5, 2);
            $table->integer('kamers');
            $table->integer('slaapkamers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huis');
    }
}
