<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Mail\clubyMail;
use Illuminate\Support\Facades\Mail;
class clubyController extends Controller
{
    //
    public function agregar(Request $request){
    try {
    	$nombre = $request->input('nombre');
    	$telefono = $request->input('telefono');
        $tel = (int)$telefono;
    	$correo = $request->input('correo');
    	$tipo = $request->input('tipo');   
        //$data = $nombre;
        //$arr = [$nombre, $telefono, $correo, $tipo];
    	//DB::select('call insertadatos(?, ?, ?, ?)', [$nombre, $telefono, $correo, $tipo]);
        DB::insert('insert into registros(`nombre`, `correo`, `telefono`, `tipo`, `fechaRegistro`) values(?,?,?,?,?)',[$nombre, $correo, $tel, $tipo,date('Y-m-d')]);
        //$pdo = DB::connection()->getPdo();
        $this->enviar($correo, $nombre);
    	return response()->json(['success'=>'Got Simple Ajax Request. '.$nombre]);
            
    } catch (\PDOException $e) {
        
    	echo "Error: ".$e->getMessage();
        return response()->json(['error'=> 'ERRORS: '.$e->getMessage()]);
    }

    }


    public function enviar($correo, $nombre){
        $objCluby = new \stdClass();
        $objCluby->nombre = $nombre;
        $objCluby->recibe = $correo;
        Mail::to($correo)->send(new clubyMail($objCluby));

    }
}
    