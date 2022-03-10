<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('costos', function (Blueprint $table) {
                $table->text('item')->primary();
                $table->text('servicio');
                $table->text('descripcion');
                $table->text('area');
                $table->text('categoria');
                $table->integer('importe_bs');
                $table->text('pertenencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costos');
    }
}
