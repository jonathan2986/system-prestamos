<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cobrador;

class CobradoresController extends Controller
{
    public function index(){
        $cobradores = Cobrador::all();
        return response()->json($cobradores, 200);
    }

    public function create(Request $request){
        $cobrador = new Cobrador();
        $cobrador->nombre = $request->nombre;
        $cobrador->apellido = $request->apellido;
        $cobrador->direccion = $request->direccion;
        $cobrador->telefono = $request->telefono;

        $cobrador->save();
        return response()->json($cobrador, 201);
    }

    public function getCobrador($id){

        $cobrador = Cobrador::find($id);
        if ($cobrador) {
            return response()->json($cobrador, 200);
        }
        return response()->json(["Cobrador no encontrado"], 404);
    }
    
    public function update(Request $request, $id){
        $cobrador = Cobrador::find($id);
        $cobrador->nombre = $request->nombre;
        $cobrador->apellido = $request->apellido;
        $cobrador->direccion = $request->direccion;
        $cobrador->telefono = $request->telefono;

        $cobrador->save();
        return response()->json($cobrador);
    }

    public function destroy($id)
    {
       $cobrador = Cobrador::find($id);
       $cobrador->delete();

       return response()->json('El cobrador fue eliminado');
    }

}
