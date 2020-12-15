<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisEntidadSaludsTable extends Migration
{
    private $tablaxxx = 'sis_entidad_saluds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_enprsa_id')->unsigned()->comment('CAMPO ID DE EPS');
            $table->foreign('sis_enprsa_id')->references('id')->on('sis_enprsas');
            $table->bigInteger('i_prm_tentidad_id')->unsigned()->comment('CAMPO DE ID TIPO DE ENTIDAD');
            $table->foreign('i_prm_tentidad_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS EPS.'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
