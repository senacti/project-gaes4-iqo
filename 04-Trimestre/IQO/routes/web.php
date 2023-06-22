<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
 *Rutas Controler Prodductos 
 */

 // reporte crud producto
Route::get("/pdf",[ProductoController::class,"pdf"])->name("productos.pdf");
//Ruta para mostrar los datos en la tabla Productos  
Route::get("/Productos",[ProductoController::class,"index"])->name("Crud_Productos.Index");

//Ruta para registrar los datos en la tabla 
Route::post("/regisProducto",[ProductoController::class,"create"])->name("Crud_Productos.Create");

//Ruta para MODIFICAR los datos en la tabla Productos
Route::post("/modifProducto",[ProductoController::class,"update"])->name("Crud_Productos.update");

//Ruta para eliminar los datos en la tabla Productos
Route::get("/elimifProducto/{ID_PRODUCTO}", [ProductoController::class, "delete"])->name("Crud_Productos.delete");



/*Rutas .Blade */

Route::get('/login', function () {
    return view('login');
});

Route::get('/AdminConsultarClientes', function () {
    return view('AdminConsultarClientes');
});

Route::get('/AdminConsultarProductos', function () {
    return view('AdminConsultarProductos');
});

Route::get('/AdminConsultarProductosVendidos', function () {
    return view('AdminConsultarProductosVendidos');
});

Route::get('/AdminGerenteConsultarVentas', function () {
    return view('AdminGerenteConsultarVentas');
});

Route::get('/AdminRegistrarProveedor', function () {
    return view('AdminRegistrarProveedor');
});

Route::get('/AdminRegistroConsultaClientes', function () {
    return view('AdminConsultarRegistroConsultaClientes');
});

Route::get('/AdminRegistroConsultaPagos', function () {
    return view('AdminRegistroConsultaPagos');
});

Route::get('/AdminRegistroOrdenesCompra', function () {
    return view('AdminRegistroOrdenesCompra');
});

Route::get('/AdminRegistroProductos', function () {
    return view('AdminRegistroProductos');
});

Route::get('/AdminRegistroTecnico', function () {
    return view('AdminRegistroTecnico');
});

Route::get('/AdminServiciosTecnicos', function () {
    return view('AdminServiciosTecnicos');
});

Route::get('/CatalogoCamaras', function () {
    return view('CatalogoCamaras');
});

Route::get('/CatalogoDiscoDuro', function () {
    return view('CatalogoDiscoDuro');
});

Route::get('/CatalogoDVR', function () {
    return view('CatalogoDVR');
});

Route::get('/CatalogoFuentes', function () {
    return view('CatalogoFuentes');
});

Route::get('/CatalogoUPS', function () {
    return view('CatalogoUPS');
});

Route::get('/Cliente', function () {
    return view('Cliente');
});

Route::get('/ClienteActualizarDatos', function () {
    return view('ClienteActualizarDatos');
});

Route::get('/ClienteConsultarOrdenPedido', function () {
    return view('ClienteConsultarOrdenPedido');
});

Route::get('/ClienteCreaOrdenPedido', function () {
    return view('ClienteCreaOrdenPedido');
});

Route::get('/ClienteValidacionActualizarDatos', function () {
    return view('ClienteValidacionActualizarDatos');
});

Route::get('/Contacto', function () {
    return view('Contacto');
});

Route::get('/Error404', function () {
    return view('Error404');
});

Route::get('/Error500', function () {
    return view('Error500');
});

Route::get('/Mensajero', function () {
    return view('Mensajero');
});

Route::get('/MensajeroRegistroNovedades', function () {
    return view('MensajeroRegistroNovedades');
});

Route::get('/MensajeroRegistroOrdenesCompra', function () {
    return view('MensajeroRegistroOrdenesCompra');
});

Route::get('/QuienesSomos', function () {
    return view('QuienesSomos');
});

Route::get('/Registro', function () {
    return view('Registro');
});

Route::get('/RegistroValidacion', function () {
    return view('RegistroValidacion');
});

Route::get('/Roles', function () {
    return view('Roles');
});

Route::get('/TecnicoConsultarEstadoServicio', function () {
    return view('TecnicoConsultarEstadoServicio');
});

Route::get('/TecnicoConsultarServiciosTecnicos', function () {
    return view('TecnicoConsultarServiciosTecnicos');
});

Route::get('/TecnicoRegistroNovedadesServicio', function () {
    return view('TecnicoRegistroNovedadesServicio');
});

Route::get('/VendedorConsultarEstadoInventario', function () {
    return view('VendedorConsultarEstadoInventario');
});

Route::get('/VendedorConsultarOrdenPedido', function () {
    return view('VendedorConsultarOrdenPedido');
});

Route::get('/VendedorConsultarProductosVendidos', function () {
    return view('VendedorConsultarProductosVendidos');
});

Route::get('/VendedorConsultarVentas', function () {
    return view('VendedorConsultarVentas');
});

Route::get('/VendedorCreaOrdenPedido', function () {
    return view('VendedorCreaOrdenPedido');
});

Route::get('/VendedorPagos', function () {
    return view('VendedorPagos');
});

Route::get('/VendedorRegistrarVentas', function () {
    return view('VendedorRegistrarVentas');
});

Route::get('/VendedorRegistroConsultaClientes', function () {
    return view('VendedorRegistroConsultaClientes');
});