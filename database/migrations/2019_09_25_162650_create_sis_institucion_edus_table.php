<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisInstitucionEdusTable extends Migration
{
    private $tablaxxx = 'sis_institucion_edus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('s_nombre')->comment('CAMPO DE NOMBRE DE LA INSTITUCION EDUCATIVA');
            $table->string('s_telefono')->comment('CAMPO DE TELEFONO DE LA INSTITUCION EDUCATIVA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->string('s_email')->comment('CAMPO CORREO ELECTRONICO DE LA INSTITUCION EDUCATIVA');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO ID DE MUNICIPIO');
            $table->integer('sis_departam_id')->unsigned()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('i_prm_sector_id')->unsigned()->comment('CAMPO PARAMETRO DE SECTOR');
            $table->integer('i_usr_rector_id')->unsigned()->comment('CAMPO PARAMETRO DE RECTOR');
            $table->integer('i_usr_secretario_id')->unsigned()->comment('CAMPO PARAMETRO DE SECRETARIO');
            $table->integer('i_usr_coord_academico_id')->unsigned()->comment('CAMPO PARAMETRO DE COORDINADOR ACADEMICO');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_departam_id')->references('id')->on('sis_departams');
            $table->foreign('i_prm_sector_id')->references('id')->on('parametros');
            $table->foreign('i_usr_rector_id')->references('id')->on('users');
            $table->foreign('i_usr_secretario_id')->references('id')->on('users');
            $table->foreign('i_usr_coord_academico_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE IDENTIFICACIÓN, UBICACIÓN Y DE CONTACTO DE CENTROS EDUCATIVOS'");
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
