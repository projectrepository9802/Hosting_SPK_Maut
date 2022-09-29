<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataSubkriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_subkriteria', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kriteria');
            $table->string('kode_subkriteria');
            $table->string('nama_subkriteria');
            $table->string('bobot_subkriteria');
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
        Schema::dropIfExists('tabel_data_subkriteria');
    }
}
