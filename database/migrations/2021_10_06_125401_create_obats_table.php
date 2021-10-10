<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('obats', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nama_obat');
      $table->integer('jumlah_obat');
      $table->integer('harga_obat');
      // $table->unsignedBigInteger('pasien_id')->nullable();
      // $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
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
    Schema::dropIfExists('obats');
  }
}
