<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $datos=DB::select("select * from proveedores");
        return view("Proveedor")->with("datos",$datos);
    }

    public function pdf()
    {

    $provedoress =DB::select("select * from proveedores");

   $pdf = PDF::loadView('pdf2', compact('provedoress'));
return $pdf->stream();    
   }


    /** CREAR */
    public function create(Request $request)
    {
        try {
            $sql = DB::insert('insert into proveedores (ID_PROVEEDOR,NOM_PROVEEDOR,DIR_PROVEEDOR,EMAIL_PROVEEDOR,NIT_PROVEEDOR,TEL_PROVEEDOR) values (?,?,?,?,?,?)', 
            [
              $request->txtID_PROVEEDOR,
              $request->txtNOMBREPROVEEDOR,
              $request->txtDIRECCIONPROVEEDOR,
              $request->txtEMAILPROVEEDOR,
              $request->txtNITPROVEEDOR,
              $request->txtTELPROVEEDOR,
              
                
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Proveedor registrado");
        } else {
            return back()->with("incorrecto","Error al registrar Proveedor");
        }
        
    }

    
    
    public function update(Request $request)
{
    try {
        $sql = DB::update("update proveedores set NOM_PROVEEDOR=?, DIR_PROVEEDOR=?, EMAIL_PROVEEDOR=?, NIT_PROVEEDOR=?, TEL_PROVEEDOR=? where ID_PROVEEDOR=?", 
        [
            
              $request->txtNOMBREPROVEEDOR,
              $request->txtDIRECCIONPROVEEDOR,
              $request->txtEMAILPROVEEDOR,
              $request->txtNITPROVEEDOR,
              $request->txtTELPROVEEDOR,
              $request->txtID_PROVEEDOR,
        ]);
        if ($sql == 0) {
            $sql = 1;
        }
    } catch (\Throwable $th) {
        $sql = 0;
    }
    if ($sql == true) {
        return back()->with("correcto", "Proveedor modificado exitosamente");
    } else {
        return back()->with("incorrecto", "Error al modificar el Proveedor");
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function delete($ID_PROVEEDOR)
    {
        try {
            $sql=DB::delete("delete from proveedores where ID_PROVEEDOR=$ID_PROVEEDOR");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Proveedor se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar Proveedor");
        }
          
    } 
}
