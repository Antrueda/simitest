<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiRetornoSalidasTable extends Migration
{
    private $tablaxxx = 'ai_retorno_salidas';
    private $tablaxxx2 = 'ai_retorno_salidas_condicion';
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
            $table->bigInteger('prm_hor_ret_id')->unsigned();
            $table->string('descripcion', 4000);
            $table->string('observaciones', 4000);
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
            $table->foreign('prm_hor_ret_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DEL RETORNO DE UN ESCAPE DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('retorno_id')->unsigned();
            $table->bigInteger('valor_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('retorno_id')->references('id')->on('ai_retorno_salidas');
            $table->foreign('valor_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'retorno_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA DE FORMA PARAMETRIZADA LOS PORMENORESDE LA CONDICION DE LLEGADA DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}