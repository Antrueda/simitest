<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiRelFamiliarsTable extends Migration
{
    private $tablaxxx = 'vsi_rel_familiars';
    private $tablaxxx2 = 'vsi_relfam_motivo';
    private $tablaxxx3 = 'vsi_relfam_dificultad';
    private $tablaxxx4 = 'vsi_relfam_acciones';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_representativa_id')->unsigned();
            $table->longText('representativa');
            $table->bigInteger('prm_mala_id')->unsigned();
            $table->bigInteger('prm_relacion_id')->unsigned();
            $table->bigInteger('prm_gusto_id')->unsigned();
            $table->longText('porque')->nullable();
            $table->bigInteger('prm_familia_id')->unsigned();
            $table->bigInteger('prm_denuncia_id')->unsigned()->nullable();
            $table->bigInteger('prm_denunante_id')->unsigned()->nullable();
            $table->longText('descripcion')->nullable();
            $table->bigInteger('prm_pareja_id')->unsigned();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_responde_id')->unsigned()->nullable();
            $table->longText('descripcion1')->nullable();
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_representativa_id')->references('id')->on('parametros');
            $table->foreign('prm_mala_id')->references('id')->on('parametros');
            $table->foreign('prm_relacion_id')->references('id')->on('parametros');
            $table->foreign('prm_gusto_id')->references('id')->on('parametros');
            $table->foreign('prm_familia_id')->references('id')->on('parametros');
            $table->foreign('prm_denuncia_id')->references('id')->on('parametros');
            $table->foreign('prm_denunante_id')->references('id')->on('parametros');
            $table->foreign('prm_pareja_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_responde_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LAS RELACIONES FAMILIARES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, SECCIÓN 3'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS POR LA QUE NO EXISTEN BUENAS RELACIONES');
            $table->bigInteger('vsi_relfamiliar_id')->unsigned()->comment('CAMPO DE ID RELACION FAMILIAR');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL O LOS MOTIVOS POR LO QUE NO EXISTEN BUENAS RELACIONES FAMILIARES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 3.4'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DETALLES DE LAS DIFICULTADES EN LAS RELACIONES FAMILIARES');
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LAS DIFICULTADES EN LAS RELACIONES FAMILIARES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 3.9'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACCIONES REALIZADAS ANTE LOS CASO DE VIOLENCIA');
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LAS ACCIONES REALIZADAS ANTE LOS CASOS DE VIOLENCIA DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 3.10'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
