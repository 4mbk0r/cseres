<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\base_les_2021;


use CpChart\Data;
use CpChart\Image;

use Illuminate\Support\Facades\DB;
class CostoController extends Controller
{
    public function index()
    {

$datos = DB::table('base_les_2021s')
                ->selectRaw('provicia, count(*) as cantidad')
                ->groupBy('provicia')
                ->get();

                $cons2 = DB::table('base_les_2021s')
                ->selectRaw('tratamiento_terminado, count(*) as cantidad')
                ->groupBy('tratamiento_terminado')
                ->get();
        
        //('select provicia, count(*) as cantidad from base_les_2021s group by provicia');
        //echo $datos[0];
        return view('acreditacion.presentar')->with('datos', $datos)->with( 'cons2', $cons2);
    }

} 
