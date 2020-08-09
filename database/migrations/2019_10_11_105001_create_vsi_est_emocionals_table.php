<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiEstEmocionalsTable extends Migration
{
    private $tablaxxx = 'vsi_est_emocionals';
    private $tablaxxx2 = 'vsi_estemo_adecuado';
    private $tablaxxx3 = 'vsi_estemo_dificulta';
    private $tablaxxx4 = 'vsi_estemo_estresante';
    private $tablaxxx5 = 'vsi_estemo_motivo';
    private $tablaxxx6 = 'vsi_estemo_lesiva';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_siente_id')->unsigned();
            $table->bigInteger('prm_contexto_id')->unsigned();
            $table->binary('descripcion_siente');
            $table->bigInteger('prm_reacciona_id')->unsigned()->nullable();
            $table->binary('descripcion_reacciona');
            $table->binary('descripcion_adecuado');
            $table->binary('descripcion_dificulta');
            $table->bigInteger('prm_estresante_id')->unsigned();
            $table->binary('descripcion_estresante')->nullable();
            $table->bigInteger('prm_morir_id')->unsigned();
            $table->integer('dia_morir')->unsigned()->nullable();
            $table->integer('mes_morir')->unsigned()->nullable();
            $table->integer('ano_morir')->unsigned()->nullable();
            $table->bigInteger('prm_pensamiento_id')->unsigned()->nullable();
            $table->bigInteger('prm_amenaza_id')->unsigned()->nullable();
            $table->bigInteger('prm_intento_id')->unsigned()->nullable();
            $table->integer('ideacion')->unsigned()->nullable();
            $table->integer('amenaza')->unsigned()->nullable();
            $table->integer('intento')->unsigned()->nullable();
            $table->bigInteger('prm_riesgo_id')->unsigned()->nullable();
            $table->integer('dia_ultimo')->unsigned()->nullable();
            $table->integer('mes_ultimo')->unsigned()->nullable();
            $table->integer('ano_ultimo')->unsigned()->nullable();
            $table->binary('descripcion_motivo')->nullable();
            $table->bigInteger('prm_lesiva_id')->unsigned()->nullable();
            $table->binary('descripcion_lesiva')->nullable();
            $table->bigInteger('prm_sueno_id')->unsigned();
            $table->integer('dia_sueno')->unsigned()->nullable();
            $table->integer('mes_sueno')->unsigned()->nullable();
            $table->integer('ano_sueno')->unsigned()->nullable();
            $table->binary('descripcion_sueno')->nullable();
            $table->bigInteger('prm_alimenticio_id')->unsigned();
            $table->integer('dia_alimenticio')->unsigned()->nullable();
            $table->integer('mes_alimenticio')->unsigned()->nullable();
            $table->integer('ano_alimenticio')->unsigned()->nullable();
            $table->binary('descripcion_alimenticio')->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_siente_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_id')->references('id')->on('parametros');
            $table->foreign('prm_reacciona_id')->references('id')->on('parametros');
            $table->foreign('prm_estresante_id')->references('id')->on('parametros');
            $table->foreign('prm_morir_id')->references('id')->on('parametros');
            $table->foreign('prm_pensamiento_id')->references('id')->on('parametros');
            $table->foreign('prm_amenaza_id')->references('id')->on('parametros');
            $table->foreign('prm_intento_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_lesiva_id')->references('id')->on('parametros');
            $table->foreign('prm_sueno_id')->references('id')->on('parametros');
            $table->foreign('prm_alimenticio_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");
        
        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'P'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'P'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'P'");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}