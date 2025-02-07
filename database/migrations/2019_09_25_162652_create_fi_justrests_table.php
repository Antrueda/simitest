<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiJustrestsTable extends Migration
{
    private $tablaxxx = 'fi_justrests';
    private $tablaxxx2 = 'fi_proceso_pards';
    private $tablaxxx3 = 'fi_proceso_srpas';
    private $tablaxxx4 = 'fi_proceso_spoas';
    private $tablaxxx5 = 'fi_proceso_familias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_vinculado_violencia_id')->unsigned()->comment('FI 10.4.1 ESTA VINCULADO A DELINCUENCIA O VIOLENCIA');
            $table->integer('i_prm_riesgo_participar_id')->unsigned()->comment('FI 10.5.1 ESTA EN RIESGO DE PARTICIPAR ACTOS DELICTIVOS');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA JUSTICIA RESTAURATIVA');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_vinculado_violencia_id')->references('id')->on('parametros');

            $table->foreign('i_prm_riesgo_participar_id')->references('id')->on('parametros');

        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS MOTIVOS PARA ESTAR VINCULADO A LA DELINCUENCIA DE LA PERSONA ENTREVISTADA, SECCION 10 FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL PARD');
            $table->integer('i_prm_ha_estado_pard_id')->unsigned()->comment('FI 10.1.1 HA ESTADO EN PARD');
            $table->integer('i_prm_actualmente_pard_id')->unsigned()->comment('FI 10.1.2 ACTUALMENTE ESTÁ EN PARD');
            $table->integer('i_prm_tipo_tiempo_pard_id')->nullable()->unsigned()->comment('FI 10.1.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN PARD');
            $table->integer('i_cuanto_pard')->nullable()->comment('FI 10.1.3.2 HACE CUANTO ESTÁ EN PARD');
            $table->integer('i_prm_motivo_pard_id')->nullable()->unsigned()->comment('FI 10.1.4 MOTIVO PARD');
            $table->string('s_nombre_defensor')->nullable()->comment('FI 10.1.5 NOMBRE DEFENSOR DE FAMILIA');
            $table->string('s_telefono_defensor')->nullable()->comment('FI 10.1.6 TELÉFONO DEFENSOR DE FAMILIA');
            $table->string('s_lugar_abierto_pard')->nullable()->comment('FI 10.1.6 LUGAR ABIERTO EL PARD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('i_prm_ha_estado_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_pard_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE PARD DE LA PERSONA ENTREVISTADA, SECCION 10 FICHA DE INGRESO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL SRPA');
            $table->integer('i_prm_ha_estado_srpa_id')->unsigned()->comment('FI 10.2.1 HA ESTADO EN SRPA');
            $table->integer('i_prm_actualmente_srpa_id')->unsigned()->comment('FI 10.2.2 ACTUALMENTE ESTÁ EN SRPA');
            $table->integer('i_prm_tipo_tiempo_srpa_id')->nullable()->unsigned()->comment('FI 10.2.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN SRPA');
            $table->integer('i_cuanto_srpa')->nullable()->comment('FI 10.2.3.2 HACE CUANTO ESTÁ EN SRPA');
            $table->integer('i_prm_motivo_srpa_id')->nullable()->unsigned()->comment('FI 10.2.4 MOTIVO SRPA');
            $table->integer('i_prm_sancion_srpa_id')->nullable()->unsigned()->comment('FI 10.2.5 SANCIÓN PEDAGÓGICA SRPA');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('i_prm_ha_estado_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_sancion_srpa_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE SRPA DE LA PERSONA ENTREVISTADA, SECCION 10 FICHA DE INGRESO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL SPOA');
            $table->integer('i_prm_ha_estado_spoa_id')->unsigned()->comment('FI 10.3.1 HA ESTADO EN SPOA');
            $table->integer('i_prm_actualmente_spoa_id')->unsigned()->comment('FI 10.3.2 ACTUALMENTE ESTÁ EN SPOA');
            $table->integer('i_prm_tipo_tiempo_spoa_id')->nullable()->unsigned()->comment('FI 10.3.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN SPOA');
            $table->integer('i_cuanto_spoa')->nullable()->comment('FI 10.3.3.2 HACE CUANTO ESTÁ EN SPOA');
            $table->integer('i_prm_motivo_spoa_id')->nullable()->unsigned()->comment('FI 10.3.4 MOTIVO SPOA');
            $table->integer('i_prm_mod_cumple_pena_id')->nullable()->unsigned()->comment('FI 10.3.5 MODALIDAD CUMPLIMIENTO DE PENA');
            $table->integer('i_prm_ha_estado_preso_id')->nullable()->unsigned()->comment('FI 10.3.6 HA ESTADO PRIVADO DE LA LIBERTAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('i_prm_ha_estado_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_mod_cumple_pena_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ha_estado_preso_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE SPOA DE LA PERSONA ENTREVISTADA, SECCION 10 FICHA DE INGRESO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL PROCESO DE LA FAMILIA');
            $table->integer('fi_compfami_id')->unsigned()->comment('MIEMBRO DE LA FAMILIA');
            $table->string('s_proceso')->comment('PROCESO');
            $table->integer('i_prm_vigente_id')->unsigned()->comment('SE ENCUENTRA VIGENTE');
            $table->integer('i_numero_veces')->comment('NUMERO DE VECES');
            $table->string('s_motivo')->comment('MOTIVO');
            $table->integer('i_hace_cuanto')->comment('HACE CUANTO');
            $table->integer('i_prm_tipo_tiempo_id')->unsigned()->comment('TIPO DE TIEMPO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('fi_compfami_id')->references('id')->on('fi_compfamis');
            $table->foreign('i_prm_vigente_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE MIEMBROS DE LA FAMILIA QUE TIENEN ESTAN EN PROCESO DE JUSTICIA RESTAURATIVA DE LA PERSONA ENTREVISTADA, SECCION 10 FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
