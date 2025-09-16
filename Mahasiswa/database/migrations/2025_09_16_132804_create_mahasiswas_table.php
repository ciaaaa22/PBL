<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama_mahasiswa');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('angkatan');
            $table->string('role')->default('mahasiswa');
            $table->unsignedBigInteger('id_ketua')->nullable();
            $table->unsignedBigInteger('id_kelompok')->nullable();
            $table->string('nama')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}