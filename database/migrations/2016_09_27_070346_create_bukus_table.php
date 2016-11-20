<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn');
            $table->string('judul');
            $table->string('desk');
            $table->string('pengarang_id');
            $table->string('penerbit_id');
            $table->string('jumlah');
            $table->string('thn_terbit');
            $table->string('rak_id');
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
        Schema::drop('bukus');
    }
}
