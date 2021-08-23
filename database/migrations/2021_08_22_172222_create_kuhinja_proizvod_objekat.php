<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuhinjaProizvodObjekat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuhinja_proizvod_objekat', function (Blueprint $table) {
            $table->primary(['kuhinja_proizvoda_id', 'objekat_id']);
            $table->integer('kuhinja_proizvoda_id');
            $table->integer('objekat_id');
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
        Schema::dropIfExists('kuhinja_proizvod_objekat');
    }
}
