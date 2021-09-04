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
            $table->id();
            $table->string('ime_i_prezime');
            $table->string('adresa');
            $table->string('apartman');
            $table->string('email')->unique();
            $table->bigInteger('telefon');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rola')->default('korisnik');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
