<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->string('jenisklm');
            $table->string('agama');
            $table->string('goldar');
            $table->string('asalprov');
            $table->string('asalkab');
            $table->string('asalkec');
            $table->string('asaldes');
            $table->string('asalkel');
            $table->string('asaljalan');
            $table->string('asalkompleks');
            $table->integer('asalnorumah');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('kelurahan');
            $table->string('jalan');
            $table->string('kompleks');
            $table->string('skill');
            $table->integer('norumah');
            $table->bigInteger('nohp');
            $table->string('email');
            $table->string('nim');
            $table->string('prodi');
            $table->string('fakultas');
            $table->integer('tahunmasuk');
            $table->string('jalurmasuk');
            $table->string('sekolah');
            $table->string('npsn');
            $table->string('image');
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
        Schema::dropIfExists('mahasiswa');
    }
}
