<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objekats', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('slug');
            $table->text('slika')->nullable();
            $table->integer('vrsta_objekta_id');
            $table->integer('cena_dostava')->nullable();
            $table->integer('vreme_dostave')->nullable();
            $table->string('opis')->nullable();
            $table->text('logo')->nullable();
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
        Schema::dropIfExists('objekats');
    }
}
