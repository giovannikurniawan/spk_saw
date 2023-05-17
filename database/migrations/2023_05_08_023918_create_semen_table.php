<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_semen');
            $table->string('gambar_semen');
            $table->string('harga_semen');
            $table->string('tekstur_semen');
            $table->string('waktu_semen');
            $table->string('warna_semen');
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
        Schema::dropIfExists('semen');
    }
}
