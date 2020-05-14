<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('coutry_id')->unsigned(); //este campo sera o campo que fara o relacionamento com a tabela coutries
            $table->foreign('coutry_id') //definindo que este campo é chave estrangeira
                ->references('id') //referenciando campo da tabela que ele se relaciona
                ->on('countries') //referenciando tabela
                ->onDelete('cascade'); //e com o onDelete('cascade') delete os registros daquele pais caso ele seja deleteado,impedindo assim que gere registros orfaos
            $table->integer('latitude');
            $table->integer('longitude');
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
        Schema::dropIfExists('locations');
    }
}
