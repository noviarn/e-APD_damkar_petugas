<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->integer('nrk')->unique();
            $table->string('password', 255)->nullable();
            $table->string('nama_lengkap', 150)->nullable();
            $table->string('nip', 150)->nullable();
            $table->foreignId('jabatan_id')->nullable();
            $table->foreignId('ukpd_id')->nullable();
            $table->foreignId('sektor_id')->nullable();
            $table->foreignId('pos_id')->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('telp')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('foto_profile')->nullable();
            $table->integer('status_id')->nullable();
            $table->tinyInteger('deleted')->default('0');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
