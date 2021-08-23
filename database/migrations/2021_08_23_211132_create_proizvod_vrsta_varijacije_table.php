<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProizvodVrstaVarijacijeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proizvod_vv', function (Blueprint $table) {
            $table->primary(['proizvod_id', 'vrsta_varijacije_id']);
            $table->integer('proizvod_id');
            $table->integer('vrsta_varijacije_id');
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
        Schema::dropIfExists('proizvod_vv');
    }
}
