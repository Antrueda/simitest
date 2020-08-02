<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    $tableNames = config('permission.table_names');
    $columnNames = config('permission.column_names');

    Schema::create($tableNames['permissions'], function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('guard_name');
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();

    });

    Schema::create($tableNames['roles'], function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('guard_name');
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();

    });

    Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
      $table->unsignedInteger('permission_id');

      $table->string('model_type');
      $table->unsignedBigInteger($columnNames['model_morph_key']);
      $table->index([$columnNames['model_morph_key'], 'model_type',], 'model_permiso_fk1');

      $table->foreign('permission_id')
        ->references('id')
        ->on($tableNames['permissions'])
        ->onDelete('cascade');

      $table->primary(
        ['permission_id', $columnNames['model_morph_key'], 'model_type'],
        'model_permiso_pk1'
      );

    });

    Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
        $table->unsignedInteger('role_id');

      $table->string('model_type');
      $table->unsignedBigInteger($columnNames['model_morph_key']);
      $table->index([$columnNames['model_morph_key'], 'model_type',], 'model_rol_fk1');

      $table->foreign('role_id')
        ->references('id')
        ->on($tableNames['roles'])
        ->onDelete('cascade');

      $table->primary(
        ['role_id', $columnNames['model_morph_key'], 'model_type'],
        'model_rol_pk1'
      );
    });

    Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
      $table->unsignedInteger('permission_id');
      $table->unsignedInteger('role_id');

      $table->foreign('permission_id')
        ->references('id')
        ->on($tableNames['permissions'])
        ->onDelete('cascade');

      $table->foreign('role_id')
        ->references('id')
        ->on($tableNames['roles'])
        ->onDelete('cascade');

      $table->primary(['permission_id', 'role_id'], 'rol_permiso_fk1');

    });

    app('cache')
      ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
      ->forget(config('permission.cache.key'));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    $tableNames = config('permission.table_names');

    Schema::drop($tableNames['role_has_permissions']);
    Schema::drop($tableNames['model_has_roles']);
    Schema::drop($tableNames['model_has_permissions']);
    Schema::drop($tableNames['roles']);
    Schema::drop($tableNames['permissions']);
  }
}
