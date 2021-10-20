<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterKondisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_kondisi', function (Blueprint $table) {
            $table->bigIncrements('id_mk');
            $table->string('nama_kondisi', 150);
            $table->string('keterangan', 255)->nullable();
            $table->tinyInteger('deleted')->default('0');

            DB::update("ALTER TABLE users AUTO_INCREMENT = 0;");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_kondisi');
    }
}
