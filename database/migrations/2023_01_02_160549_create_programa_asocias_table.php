<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaAsociasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_asocias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('progra_id')->nullable()->unsigned()->comment('ID DIAGNOSTICO');
            $table->foreign('progra_id')->references('id')->on('programas');
            $table->integer('tipop_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('tipop_id')->references('id')->on('tipoprogramas');
            $table->integer('modal_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('modal_id')->references('id')->on('modalidads');
            $table->integer('sede_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD');
            $table->foreign('sede_id')->references('id')->on('sede_centros');
            $table->integer('conve_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD');
            $table->foreign('conve_id')->references('id')->on('convenios');
            $table = CamposMagicos::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_asocias');
    }
}




