<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*
        php artisan migrate -> comando para ejecutar y crear tablas de migración
        php artisan make:migration nombre -> crear una migración
        php artisan migrate:rollback -> borra el último lote (batch) migrado
        php artisan make:migration create_nombre_table -> crea migración estructurado
        php artisan migrate:fresh -> elimina todas las tablas y luego vuelve a migrar
        php artisan migrate:refresh -> ejecuta el método down de cada migración y luego vuelve a migrar
        php artisan make:migration add_columna_to_tabla_table -> crea migración para agregar columnas sin alterar datos
        php artisan make:migration change_properties_to_users_table -> crea migración para cambiar de propiedad a una columna
        php artisan migrate:reset -> elimina todas las migraciones (tablas) 
    */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // INT UNSIGNED AUTOINCREMENT
            $table->string('name'); // VARCHAR (255)
            $table->string('email')->unique(); // VARCHAR (255) UNIQUE 
            $table->timestamp('email_verified_at')->nullable();  // DATE NULL (acepta valores nulos)
            $table->string('password'); // VARCHAR (255)
            $table->rememberToken(); // VARCHAR (100)
            $table->timestamps(); // created_at updated_at (almacena fecha de creación y actualización  )
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Elimina la tabla
    }
};
