<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

    <body>
        <div class="logo">
            <img src="{{ asset ('images/logoIQO.png')}}" alt="logo">
                        <h1><center>INVENTORIES AND QUICK ORGANIZATION</center></h1>
    
        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>VENDEDOR</b></a>
            <a href="{{url('VendedorRegistroConsultaClientes')}}  "class="icon-a"><i class="fa fa-users icons"></i> Registrar y Consultar Clientes</a>
            <a href="{{url('VendedorRegistrarVentas')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Registrar Ventas</a>
            <a href="{{url('VendedorConsultarProductosVendidos')}}"class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="{{url('VendedorPagos ')}}"class="icon-a"><i class="fa fa-tasks icons"></i> Adjuntar Comprobante de Pago</a>
            <a href="{{url('VendedorConsultarVentas')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ventas</a>
            <a href="{{url('VendedorCreaOrdenesPedido')}}"class="icon-a"><i class="fa fa-user icons"></i> Crear Ordenes de Pedido</a>
            <a href="{{url('VendedorConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ordenes de Pedido</a>
            <a href="{{url('VendedorConsultarProductosVendidos')}}"class="icon-a"><i class="fa fa-suitcase icons"></i> Consultar Productos Registrados</a>
            <a href="{{url('VendedorConsultarEstadoInventario')}} "class="icon-a"><i class="fa fa-unlock icons"></i> Consultar Estado de Productos</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
            <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>
<div>
        <form>
            <legend><b>REGISTRAR VENTAS</b></legend><br>
            <legend><b>Seleccione la Opciòn de la Venta</b></legend><br>
            <fieldset class="ventas">
                <input type="submit" value="Producto">
                <input type="submit" value="Servicio">
            </fieldset>
        
        <fieldset class="ventas">
                <input type="text" required pattern= "[a-zA-Z]+" placeholder="Digite Nombre Completo">
                <input type="number" required placeholder="Digite cedula o NIT">
                <legend><b>Datos de la Factura</b></legend>
                <input type="date" required placeholder="Digite fecha">
                <input type="number" required placeholder="Numero de Factura">
            </fieldset>
            <fieldset>
                <legend><b>Datos de los Productos</b></legend>
                <input type="number" required placeholder="cant productos o servicios"><br>
                <input type="text" required placeholder="Descripcion"><br>
                <input type="number" required placeholder="Valor Subtotal"><br>
                <input type="number" required placeholder="Valor Iva"><br>
                <input type="number" required placeholder="Valor Total"><br>
                <input type="text" required pattern= "[a-zA-Z]+" placeholder="Forma de Pago">
        </fieldset>

        <legend><b>Adjuntar Comprobante de Venta</b></legend>
                <fieldset class="ventas">
                <input type="submit" value="SI">
                <input type="submit" value="NO">
            </fieldset>
           
        </form>
        <input type="submit" value="Registrar Venta">
        <input type="reset" value="Limpiar">
    </div>
        </body>
    

        </html>