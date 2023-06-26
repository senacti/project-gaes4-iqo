<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function index()
    {
        $datos=DB::select("select * from servicio");
        return view("Servicio")->with("datos",$datos);
    }

    public function pdf()
    {

    $servicios =DB::select("select * from servicio");

   $pdf = PDF::loadView('pdf3', compact('servicios'));
return $pdf->stream();    
   }


    /** CREAR */
    public function create(Request $request)
    {
        try {
            $sql = DB::insert('insert into servicio (ID_SERVICIO,DESCRIPCION_SERV,PRECIO_SERVICIO,ID_TIPO_SERV,ID_ESTADO_SERV, ID_CLIENTE) values (?,?,?,?,?,?)', 
            [
              $request->txtID_SERVICIO,
              $request->txtDESCRIPCIONSERVICIO,
              $request->txtPRECIOSERVICIO,
              $request->txtIDTIPOSERVICIO,
              $request->txtIDESTADOSERVICIO,
              $request->txtIDCLIENTE,
                
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Servicio registrado");
        } else {
            return back()->with("incorrecto","Error al registrar Servicio");
        }
        
    }

    
    
    public function update(Request $request)
{
    try {
        $sql = DB::update("update servicio set DESCRIPCION_SERV=?, PRECIO_SERVICIO=?, ID_TIPO_SERV=?, ID_ESTADO_SERV=?, ID_CLIENTE=?  where ID_SERVICIO=?", 
        [
            
            $request->txtDESCRIPCIONSERVICIO,
            $request->txtPRECIOSERVICIO,
            $request->txtIDTIPOSERVICIO,
            $request->txtIDESTADOSERVICIO,
            $request->txtIDCLIENTE,

              $request->txtID_SERVICIO,
        ]);
        if ($sql == 0) {
            $sql = 1;
        }
    } catch (\Throwable $th) {
        $sql = 0;
    }
    if ($sql == true) {
        return back()->with("correcto", "Servicio modificado exitosamente");
    } else {
        return back()->with("incorrecto", "Error al modificar el Servicio");
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function delete($ID_SERVICIO)
    {
        try {
            $sql=DB::delete("delete from servicio where ID_SERVICIO=$ID_SERVICIO");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Servicio se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar Servicio");
        }
          
    }

}
