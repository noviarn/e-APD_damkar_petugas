<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('apd_id');
            $table->foreign('apd_id')->references('id_mj')->on('master_jenis_apd');
            $table->string('ukuran', 150)->nullable();
            $table->string('merk', 150)->nullable();
            $table->integer('petugas_id');
            $table->foreign('petugas_id')->references('nrk')->on('users');
            $table->smallInteger('tahun')->nullable();
            $table->unsignedBigInteger('kondisi_id')->default('1');
            $table->foreign('kondisi_id')->references('id_mk')->on('master_kondisi');
            $table->string('foto', 255)->nullable();
            $table->tinyInteger('status_verifikasi')->nullable();
            $table->timestamps();
            $table->tinyInteger('deleted')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apd');
    }
}
