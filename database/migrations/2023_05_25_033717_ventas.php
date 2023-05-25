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
        Schema::create('ventas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('producto');
            $table->integer('cantidad');
            $table->double('precio');
            $table->foreignId('id_persona')->constrained(
                table: 'clientes', indexName: 'id'
            );
            $table->dateTimeTz('fecha_venta', $precision = 0);
            $table->string('url', 5000)->default('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Check_mark.svg/800px-Check_mark.svg.png');
        });

        // Schema::create('ventas', function (Blueprint $table){
        //     $table->bigIncrements('id');
        //     $table->string('producto');
        //     $table->integer('cantidad');
        //     $table->double('precio');
        //     $table->integer('id_persona');
        //     $table->dateTimeTz('fecha_venta', $precision = 0);
        //     $table->string('url', 5000)->default('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Check_mark.svg/800px-Check_mark.svg.png');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
