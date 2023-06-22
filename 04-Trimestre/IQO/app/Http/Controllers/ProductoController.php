<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos=DB::select("select * from producto");
        return view("Productos")->with("datos",$datos);
    }

    public function pdf()
{

    $productos =DB::select("select * from producto");

   $pdf = PDF::loadView('pdf', compact('productos'));
return $pdf->stream();



    
    
}


    /** CREAR */
    public function create(Request $request)
    {
        try {
            $sql = DB::insert('insert into producto (ID_PRODUCTO,NOMBRE_PRODUCTO, DESCRIPCION_PRODUCTO, REFERENCIA_PRODUCTO, VALOR_PRODUCTO, CANTIDAD_PRODUCTO, ID_MARCA) values (?,?,?,?,?,?,?)', 
            [
              $request->txtID_PRODUCTO,
              $request->txtNOMBRE,
              $request->txtDescripcionP,
              $request->txtReferenciaP,
              $request->txtValorP,
              $request->txtCantidadP,
              $request->txtIdMarca,
                
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","producto registrado");
        } else {
            return back()->with("incorrecto","Error al registrar producto");
        }
        
    }

    
    
    public function update(Request $request)
{
    try {
        $sql = DB::update("update producto set NOMBRE_PRODUCTO=?, DESCRIPCION_PRODUCTO=?, REFERENCIA_PRODUCTO=?, VALOR_PRODUCTO=?, CANTIDAD_PRODUCTO=?, ID_MARCA=? where ID_PRODUCTO=?", 
        [
            
              $request->txtNOMBRE,
              $request->txtDescripcionP,
              $request->txtReferenciaP,
              $request->txtValorP,
              $request->txtCantidadP,
              $request->txtIdMarca,
              $request->txtID_PRODUCTO,
        ]);
        if ($sql == 0) {
            $sql = 1;
        }
    } catch (\Throwable $th) {
        $sql = 0;
    }
    if ($sql == true) {
        return back()->with("correcto", "Producto modificado exitosamente");
    } else {
        return back()->with("incorrecto", "Error al modificar el producto");
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function delete($ID_PRODUCTO)
    {
        try {
            $sql=DB::delete("delete from producto where ID_PRODUCTO=$ID_PRODUCTO");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","producto se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar Actividad");
        }
          
    }
}
