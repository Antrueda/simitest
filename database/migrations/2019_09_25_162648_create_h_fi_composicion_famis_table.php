<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiComposicionFamisTable extends Migration
{
    private $tablaxxx = 'h_fi_composicion_famis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_telefono')->nullable();
            $table->string('s_documento')->unique();
            $table->date('d_nacimiento'); 
            $table->bigInteger('i_prm_ocupacion_id')->unsigned();
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('i_prm_vinculado_idipron_id')->unsigned();
            $table->bigInteger('i_prm_convive_nnaj_id')->unsigned();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('fi_nucleo_familiar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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