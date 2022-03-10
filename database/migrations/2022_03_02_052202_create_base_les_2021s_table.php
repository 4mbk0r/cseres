<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseLes2021sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_les_2021s', function (Blueprint $table) {
            /*nro;anho;cod_esta;departamento;provicia;municipio;cod_mun;
            establecimiento;fecha_registro;
            
            nom_completo ; ci;dp;anho_p;mes;sexo;residencia_actual;fecha_infeccion;dep_infeccion;
            
            
            pro_infeccion;municipio_inf;codigo_infeccion;
            
            localidad;
            origen_caso;
            */
            $table->id('nro');
            $table->text('anho');
            $table->text('cod_est');
            $table->text('departamento');
            $table->text('provicia');
            $table->text('municipio');
            $table->text('cod_mun');
            $table->text('establecimiento');
            $table->text('fecha_registro');
            $table->text('nom_completo');
            $table->text('ci');
            $table->text('dp');
            $table->text('anho_p');
            $table->text('mes');
            $table->text('sexo');
            $table->text('residencia_actual');
            $table->text('fecha_infeccion');
            $table->text('dep_infeccion');
            $table->text('pro_infeccion');
            $table->text('municipio_inf');
            $table->text('codigo_infeccion');
            $table->text('localidad');
            $table->text('origen_caso');
            $table->text('forma_clinica');
            $table->text('con_inicial_p');
            $table->text('frotis');
            $table->text('cultivo');
            $table->text('histopatologia');
            $table->text('idr');
            $table->text('pcr');
            $table->text('ifi');
            $table->text('criterio_confirmacion');
            $table->text('retratamiento');
            $table->text('tratamiento_contagio');
            $table->text('peso');
            $table->text('dosis');
            $table->text('glucantime');
            $table->text('anfotericina_b_liposomal');
            $table->text('miltefosine_10mg');
            $table->text('miltefosine_50mg');
            $table->text('intralesional_glucantime');
            $table->text('duracion_del_tto_en_dias');
            $table->text('tratamiento_terminado');
            $table->text('condicion_final');
            $table->text('observaciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_les_2021s');
    }
}
