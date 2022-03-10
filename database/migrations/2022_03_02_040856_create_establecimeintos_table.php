<?php
/*
nro,anho,cod_est,departamento,provicia,municipio,cod_mun,establecimiento,fecha_registro,nom_completo,ci,dp,anho_p,mes,sexo,residencia_actual,dep_infeccion,pro_infeccion,municipio_inf,codigo_infeccion,localidad,origen_caso,forma_clinica,con_inicial_p,frotis,cultivo,histopatologia,idr,pcr,ifi,criterio_confirmacion,retratamiento,tratamiento_contagio,peso(kg),dosis(mg),GLUCANTIME_(AMPOLLA),ANFOTERICINA_B_LIPOSOMAL_(FRASCO),MILTEFOSINE_10MG_(TABLETA),MILTEFOSINE_50MG_(TABLETA),INTRALESIONAL_GLUCANTIME,DURACION_DEL_TTO_EN DIAS,TRATAMIENTO_TERMINADO,CONDICION_final,OBSERVACIONES
');
INSERT INTO base_les_2021s ( nro,anho,cod_est,departamento,provicia,municipio,cod_mun,establecimiento,fecha_registro,nom_completo,ci,dp,anho_p,mes,sexo,residencia_actual,dep_infeccion,pro_infeccion,municipio_inf,codigo_infeccion,localidad,origen_caso,forma_clinica,con_inicial_p,frotis,cultivo,histopatologia,idr,pcr,ifi,criterio_confirmacion,retratamiento,tratamiento_contagio,peso(kg),dosis(mg),GLUCANTIME_(AMPOLLA),ANFOTERICINA_B_LIPOSOMAL_(FRASCO),MILTEFOSINE_10MG_(TABLETA),MILTEFOSINE_50MG_(TABLETA),INTRALESIONAL_GLUCANTIME,DURACION_DEL_TTO_EN DIAS,TRATAMIENTO_TERMINADO,CONDICION_final,OBSERVACIONES ) VALUES ('
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimeintosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->text('cod_est')->primary();
            $table->text('departamento');
            $table->text('provicia');
            $table->text('municipio');
            $table->text('cod_mun');
            $table->text('tipo');
            $table->text('establecimiento');
            $table->text('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimeintos');
    }
}
