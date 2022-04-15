<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('riwayat_pekerjaan');
            $table->string('ktp')->nullable();
            $table->string('category');
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
        Schema::dropIfExists('data_pegawais');
    }
}
