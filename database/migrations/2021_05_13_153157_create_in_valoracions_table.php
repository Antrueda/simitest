<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInValoracionsTable extends Migration
{
    private $tablaxxx = 'in_valoracions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_lineabase_nnaj_id')->unsigned()->comment('LLAVE FORANEA TABLA in_lineabase_nnajs');
            $table->integer('i_prm_categoria_id')->unsigned()->comment('CAMPO PARAMETROS TIPO DE CATEGORIA');
            $table->integer('i_prm_cactual_id')->unsigned()->comment('CAMPO PARAMETROS ACTUAL');
            $table->integer('i_prm_avance_id')->unsigned()->comment('CAMPO PARAMETROS AVANCE');
            $table->integer('i_prm_nivel_id')->unsigned()->comment('CAMPO PARAMETROS NIVEL');
            $table->string('s_valoracion', 255)->comment('CAMPO DE TEXTO VALORACION');
            $table->foreign('in_lineabase_nnaj_id')->references('id')->on('in_lineabase_nnajs');
            $table->foreign('i_prm_categoria_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cactual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_id')->references('id')->on('parametros');
            $table->foreign('i_prm_nivel_id')->references('id')->on('parametros');
            $table->unique(['in_lineabase_nnaj_id', 'i_prm_cactual_id'],'invalo_un1');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_lineabase_nnaj_id')->unsigned()->comment('LLAVE FORANEA TABLA in_lineabase_nnajs');
            $table->integer('i_prm_categoria_id')->unsigned()->comment('CAMPO PARAMETROS TIPO DE CATEGORIA');
            $table->integer('i_prm_cactual_id')->unsigned()->comment('CAMPO PARAMETROS ACTUAL');
            $table->integer('i_prm_avance_id')->unsigned()->comment('CAMPO PARAMETROS AVANCE');
            $table->integer('i_prm_nivel_id')->unsigned()->comment('CAMPO PARAMETROS NIVEL');
            $table->string('s_valoracion', 255)->comment('CAMPO DE TEXTO VALORACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CARACTERIZACION DE LA LINEA DE BASE DE NNAJ REGISTRADO EN EL SISTEMA Y SU NIVEL DE AVANCE'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}