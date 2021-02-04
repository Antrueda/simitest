<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiRetornoSalidasTable extends Migration
{
    private $tablaxxx = 'ai_retosalis';
    private $tablaxxx2 = 'ai_retsalcos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_retorno');
            $table->longText('descripcion')->nullable();
            $table->longText('observaciones')->nullable();
            $table->string('nombres_retorna', 120)->nullable();
            $table->bigInteger('prm_doc_id')->unsigned()->nullable();
            $table->string('doc_retorna', 10)->nullable();
            $table->bigInteger('prm_parentezco_id')->unsigned()->nullable();
            $table->bigInteger('responsable')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DEL RETORNO DE UN ESCAPE DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_condicion_id')->unsigned();
            $table->bigInteger('prm_orientado_id')->unsigned();
            $table->bigInteger('prm_enfermerd_id')->unsigned();
            $table->bigInteger('prm_brotes_id')->unsigned();
            $table->bigInteger('prm_laceracio_id')->unsigned();
            $table->bigInteger('retorno_id')->unsigned();
            $table->bigInteger('ai_retorno_salida_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('prm_orientado_id')->references('id')->on('parametros');
            $table->foreign('prm_enfermerd_id')->references('id')->on('parametros');
            $table->foreign('prm_brotes_id')->references('id')->on('parametros');
            $table->foreign('prm_laceracio_id')->references('id')->on('parametros');
            $table->foreign('ai_retorno_salida_id')->references('id')->on('ai_retosalis');
            $table->timestamps();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA DE FORMA PARAMETRIZADA LOS PORMENORESDE LA CONDICION DE LLEGADA DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
