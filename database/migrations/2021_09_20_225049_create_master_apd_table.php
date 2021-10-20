<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterApdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_apd', function (Blueprint $table) {
            $table->bigIncrements('id_ma');
            $table->integer('mj_id')->nullable();
            $table->integer('mt_id')->nullable();
            $table->string('merk', 150)->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->string('foto', 255)->nullable();
            $table->string('daftar_tahun', 255)->nullable();
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
        Schema::dropIfExists('master_apd');
    }
}
