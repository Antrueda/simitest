<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiCsd extends Migration
{
    private $tablaxxx = '_fi_csd_vsi';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_etnia_id')->unsigned();
            $table->bigInteger('prm_poblacion_id')->unsigned();
            $table->bigInteger('sis_municipioexp_id')->unsigned();
            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->string('s_apodo')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->date('d_nacimiento');
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('prm_gsanguino_id')->unsigned();
            $table->bigInteger('prm_factor_rh_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('sis_upzbarri_id')->unsigned()->nullable();
            $table->bigInteger('prm_estado_civil_id')->unsigned();
            $table->bigInteger('prm_situacion_militar_id')->unsigned();
            $table->bigInteger('prm_clase_libreta_id')->unsigned();
            $table->string('s_nombre_focalizacion');
            $table->string('s_lugar_focalizacion');
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_paiexp_id')->unsigned();
            $table->bigInteger('sis_departamentoexp_id')->unsigned();
            $table->bigInteger('i_prm_linea_base_id')->unsigned();



            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_poblacion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_linea_base_id')->references('id')->on('parametros');
            $table->foreign('prm_etnia_id')->references('id')->on('parametros');

            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
           
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');

            $table->foreign('prm_estado_civil_id')->references('id')->on('parametros');
            $table->foreign('prm_situacion_militar_id')->references('id')->on('parametros');
            $table->foreign('prm_clase_libreta_id')->references('id')->on('parametros');
            $table->foreign('sis_upzbarri_id')->references('id')->on('sis_upzbarris');
            $table->foreign('i_prm_ayuda_id')->references('id')->on('parametros');
            $table->foreign('sis_municipioexp_id')->references('id')->on('sis_municipios');

            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_paiexp_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamentoexp_id')->references('id')->on('sis_departamentos');
            $table->unique(['sis_esta_id','s_documento']);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE LAS PERSONAS QUE HACEN PARTE DE LA COMPOSICIÓN FAMILIAR DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO, VALORACIÓN SICOSOCIAL O CONSULTA SOCIAL EN DOMICILIO.'");
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
