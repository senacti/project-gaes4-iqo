<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleordenesped2.css')}}">
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
        <form>
            <legend><b>CONSULTAR ORDENES DE PEDIDO</b></legend><br>
            <fieldset class="datos">
                <b>Búsqueda:</b><br>
                <b>Nombre del Cliente</b> <input type="text" required pattern= "[a-zA-Z]+" placeholder=""> <br>
                <b>Numero de Cédula o Nit </b><input type="number" placeholder=""><br>
                <b>Código del Producto o Servicio</b><input type="number" placeholder=""><br>
            </form> <br>
                <br><section class="products-list"><br>
                    <div class="product-item" category="monitores">
                        
                        <a href="#">Johan Rodriguez CC 1023888540</a>
                        Cámara<br>
                        Ref 001<br>
                        2 unidades Solicitadas
                        $50.000
                        
                    </div>
                    <div class="product-item" category="audifonos">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="smartphones">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="smartphones">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="ordenadores">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="ordenadores">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="monitores">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                    <div class="product-item" category="audifonos">
                        <a href="#">Johana Rodriguez CC 1023887540</a>
                        Disco Duro<br>
                        Ref 001<br>
                        3 unidades Solicitadas
                        $50.000
                    </div>
                </section>
            </div>
        </div>
    </body>
    

    </html>