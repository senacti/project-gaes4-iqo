<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleordenesped2.css')}}">
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
        <form>
            <legend><b>CONSULTAR ESTADO DE PRODUCTOS</b></legend><br>
            <fieldset class="datos">
                <b>Búsqueda:</b><br>
                <b>Nombre de Producto </b><input type="text" required pattern= "[a-zA-Z]+" maxlength="50"size="50"placeholder=" "><br>
                <b>Fecha de Registro</b><input type="date" placeholder="">
               
                <input type="number" placeholder="Cod Producto o Servicio">
               </form> <br>
                <br><section class="products-list"><br>
                    <div class="product-item">
                        
                        <a href="#">Camara</a>
                        Ref 001 <br>
                        3 unidades Disponibles
                        <b>c/u: $80.000</b>
                        Estado:Activo
                        
                    </div>
                    <div class="product-item">
                        <a href="#">Cable de Red</a>
                        Ref 002<br>
                        3 unidades Disponibles
                        <b>c/u: $80.000</b>
                        Estado:Inactivo
                    </div>
                    <div class="product-item">
                        <a href="#"> Camara Wifi</a>
                        Ref 003<br>
                        3 unidades Disponibles
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                    <div class="product-item">
                        <a href="#">Disco Duro</a>
                        Ref 004<br>
                        3 unidades Solicitadas
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                    <div class="product-item">
                        <a href="#">Disco Duro</a>
                        Ref 004<br>
                        3 unidades Solicitadas
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                    <div class="product-item">
                        <a href="#">Disco Duro</a>
                        Ref 004<br>
                        3 unidades Solicitadas
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                    <div class="product-item">
                        <a href="#">Disco Duro</a>
                        Ref 004<br>
                        3 unidades Solicitadas
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                    <div class="product-item">
                        <a href="#">Disco Duro</a>
                        Ref 004<br>
                        3 unidades Solicitadas
                        <b>c/u: $80.000</b>
                        Estado:Activo
                    </div>
                </body>
    
                </html>