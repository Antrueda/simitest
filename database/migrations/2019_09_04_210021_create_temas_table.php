<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTemasTable extends Migration
{
    private $tablaxxx = 'temas';
    private $tablaxxx2 = 'parametro_temacombo';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $relacion='tema_';
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre')->unique()->comment('CAMPO DE NOMBRE DEL TEMAS');
            $table->integer('sis_docfuen_id')->nullable()->unsigned();
            $table->foreign('sis_docfuen_id', $relacion.'fk4')->references('id')->on('sis_docfuens');
            $table->unique(['nombre','sis_docfuen_id'],$relacion.'un1');
            $table = CamposMagicos::magicosFk($table,[$relacion,'fk1','fk2','fk3']);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS TEMAS REGISTRADOS EN EL SISTEMA'");
        Schema::create('temacombos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->unique()->comment('NOMBRE DE LA PREGUANTA');
            $table->integer('tema_id')->unsigned();
            $table->foreign('tema_id', 'teco_fk4')->references('id')->on('temas');
            $table = CamposMagicos::magicosFk($table,['teco_','fk1','fk2','fk3']);
        });

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->integer('parametro_id')->unsigned()->comment('ID DEL PARAMETRO');
            $table->integer('temacombo_id')->unsigned()->comment('ID DEL TEMACOMBO');
            $table->string('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->foreign('parametro_id','pate_fk4')->references('id')->on('parametros');
            $table->foreign('temacombo_id','pate_fk5')->references('id')->on('temacombos');
            $table->unique(['parametro_id', 'temacombo_id'], 'pact_un1');
            $table = CamposMagicos::magicosFk($table,['pate_','fk1','fk2','fk3']);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'ALMACENA LA ASOCIACIóN DE LA PREGUNTA CON EL DOCUMENTO FUENTE Y EN QUE TABLA SE UTILIZA LA PREGUNTA'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
