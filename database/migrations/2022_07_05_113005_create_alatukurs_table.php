<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatukursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alatukurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_seri')->unique(); //integer
            $table->foreignId('pic_id'); //relasi ke tabel categories
            $table->foreignId('location_id'); //relasi ke tabel user
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
        Schema::dropIfExists('alatukurs');
    }
}
