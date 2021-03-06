<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXidmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xidmets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('xidmet',['sac','uz']);
            $table->string('nov')->nullable();
            $table->string('qeyd',500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xidmets');
    }
}
