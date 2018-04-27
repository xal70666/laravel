<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlbumDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('judul', 30);
            $table->string('label', 30);
            $table->string('band', 30);
            $table->date('tanggal_rilis');
            $table->integer('id_genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_detail');
    }
}
