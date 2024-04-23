<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('companies', function (Blueprint $table) {
            // Modificar la columna existente en lugar de agregar una nueva
            $table->string('Phone', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Si deseas revertir los cambios, puedes hacerlo en el método down()
        Schema::table('companies', function (Blueprint $table) {
            $table->integer('Phone', 100)->change();
        });
    }
};
