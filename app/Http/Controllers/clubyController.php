<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Mail\clubyMail;
use Illuminate\Support\Facades\Mail;
use Validator;
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
           $messages = [
            'required' => 'El :attribute es necesario.',
            'numeric'  => 'El :attribute solo admite numeros',
            'email'    => 'EL :attribute debe tener un formato',

        ];
        $validator = Validator::make($request->all(),[
            'nombre'    => 'required',
            'telefono'  => 'required|numeric',
            'correo'    => 'required|email',
        ], $messages);

        if ($validator->passes()) {
            DB::insert('insert into registros(`nombre`, `correo`, `telefono`, `tipo`, `fechaRegistro`) values(?,?,?,?,?)',[$nombre, $correo, $tel, $tipo,date('Y-m-d')]);
            $this->enviar($correo, $nombre);
            return response()->json(['success'=>'¡Bienvenido '.$nombre.' gracias por registrarte!']);

        }
    	//DB::select('call insertadatos(?, ?, ?, ?)', [$nombre, $telefono, $correo, $tipo]);
        //DB::insert('insert into registros(`nombre`, `correo`, `telefono`, `tipo`, `fechaRegistro`) values(?,?,?,?,?)',[$nombre, $correo, $tel, $tipo,date('Y-m-d')]);
        //$this->enviar($correo, $nombre);
        return response()->json(['error'=>$validator->errors()->all()]);
        //return back()->with('success','Item created successfully!');

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
