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
            $table->string("nik");
            $table->string("nama");
            $table->string("jenis_kelamin");
            $table->string("tempat_lahir");
            $table->datetime("tanggal_lahir");
            $table->string("pendidikan");
            $table->string("jenis_pekerjaan");
            $table->string("status_pernikahan");
            $table->string("status_keluarga");
            $table->string("kewarganegaraan");
            $table->string("pasport");
            $table->string("kitap");
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
