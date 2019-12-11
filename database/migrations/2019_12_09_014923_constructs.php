<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Constructs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructs', function (Blueprint $table) {
            $table->bigIncrements('const_id');
            $table->string('const_name');
            $table->unsignedBigInteger('const_user')->nullable();
            $table->foreign('const_user')
                ->references('user_id')
                ->on('users')
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
        Schema::dropIfExists('constructs');
    }
}
