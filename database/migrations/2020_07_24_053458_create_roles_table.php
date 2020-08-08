<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            //php artisan migrate
            $table->id();//es lo mismo que bigIncrements('id'); de laravel 6
            //name podria llamarse key que seria la llave interna para verificar los roles
            //por ejemplo admin, lo importante es que debe ser unico
            $table->string('name')->unique(); // ejem: valor 'admin' nombre columna tambien puede ser key 
            // aca el nombre que veriamos en la aplicacion, ej: 'Administrador del sitio'
            $table->string('display_name')->nullable(); // ejem: valor 'Administrador del sitio'
            $table->text('description')->nullable();//nullable significa que acepta valor null
            $table->timestamps();//este ultimo campo crea dos campos en mysql "created_at" y "updated_at"

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //php artisan migrate:rollback
        Schema::dropIfExists('roles');
    }
}
