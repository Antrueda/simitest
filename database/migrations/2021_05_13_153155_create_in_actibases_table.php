<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInActibasesTable extends Migration
{
    private $tablaxxx = 'in_actibases';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_tiempo')->comment('CAMPO TIEMPO');
            $table->integer('i_porcentaje')->comment('CAMPO PORCENTAJE');
            $table->integer('i_prm_tiempo_id')->unsigned()->comment('CAMPO PARAMETROS TIPO DE TIEMPO');
            $table->foreign('i_prm_tiempo_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_tiempo')->comment('CAMPO TIEMPO');
            $table->integer('i_porcentaje')->comment('CAMPO PORCENTAJE');
            $table->integer('i_prm_tiempo_id')->unsigned()->comment('CAMPO PARAMETROS TIPO DE TIEMPO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DETALLES RELACIONADOS CON EL TIEMPO'");
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