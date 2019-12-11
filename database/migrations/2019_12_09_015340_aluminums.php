<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aluminums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluminums', function (Blueprint $table) {
            $table->bigIncrements('alu_id');
            $table->string('alu_name');
            $table->string('alu_image');
            $table->unsignedBigInteger('alu_const')->nullable();
            $table->foreign('alu_const')
                ->references('const_id')
                ->on('constructs')
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
        Schema::dropIfExists('aluminums');
    }
}
