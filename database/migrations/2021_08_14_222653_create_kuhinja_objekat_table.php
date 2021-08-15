<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuhinjaObjekatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuhinja_objekat', function (Blueprint $table) {
            $table->primary(['kuhinja_id', 'objekat_id']);
            $table->integer('kuhinja_id');
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
        Schema::dropIfExists('kuhinja_objekat');
        Schema::dropIfExists('kuhinja_objekta');
        Schema::dropIfExists('kuhinja_vrsta_objekta');
    }
}
