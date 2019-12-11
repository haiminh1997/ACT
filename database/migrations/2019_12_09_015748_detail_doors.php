<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailDoors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_doors', function (Blueprint $table) {
            $table->bigIncrements('detail_id');
            $table->string('nameCustomer');
            $table->string('symbol_door');
            $table->string('image');
            $table->string('width');
            $table->string('height');
            $table->string('H1');
            $table->string('HCC');
            $table->string('type_glass');
            $table->string('count');
            $table->string('price_glass');
            $table->string('price_alu');
            $table->unsignedBigInteger('door_detail')->nullable();
            $table->foreign('door_detail')
                ->references('door_id')
                ->on('doors')
                ->onDelete('cascade');
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
        Schema::dropIfExists('detail_doors');
    }
}
