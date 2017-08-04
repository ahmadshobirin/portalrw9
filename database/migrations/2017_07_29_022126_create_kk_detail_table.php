<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kartu_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("kartu_keluarga");
            $table->integer("nik");
            $table->string("nama");
            $table->enum("jk",['laki-laki','perempuan']);
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("pendidikan");
            $table->string("jenis_pekerjaan");
            $table->string("status_pernikahan");
            $table->string("status_keluarga");
            $table->string("kewarganegaraan");
            $table->string("pasport")->nullable();
            $table->string("kitap")->nullable();
            $table->string("ayah");
            $table->string("ibu");
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
        Schema::dropIfExists('detail_kartu_keluarga');
    }
}
