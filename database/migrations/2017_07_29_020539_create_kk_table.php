<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->string("no_kk");
            $table->string("kepala_keluarga");
            $table->text("alamat");
            $table->string("rt");
            $table->string("rw");
            $table->string("desa_kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten_kota");
            $table->string("kodepos");
            $table->string("provinsi");
            $table->date("keluar_tgl");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartu_keluarga');
    }
}
