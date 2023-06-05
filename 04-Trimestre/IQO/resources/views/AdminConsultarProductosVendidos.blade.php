<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styleadministrador.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleproductos.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="logo">
        <img src="{{ asset('images/logoIQO.png') }}" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>ADMINISTRADOR</b></a>
            <a href="{{ url ('/AdminConsultarClientes')}}"><i class="fa fa-users icons"></i> Consultar Clientes</a>
            <a href="{{ url ('/AdminGerenteConsultarVentas')}}" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar ventas</a>
            <a href="{{ url ('/AdminConsultarProductosVendidos')}}" class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="{{ url ('/AdminRegistroTecnico')}}" class="icon-a"><i class="fa fa-tasks icons"></i> Registrar y consultar Tecnico</a>
            <a href="{{ url ('/AdminRegistrarProveedor')}}" class="icon-a"><i class="fa fa-list-alt icons"></i> Registrar y consultar Proveedor</a>
            <a href="{{ url ('/AdminRegistroProductos')}}" class="icon-a"><i class="fa fa-server"></i>Registrar Productos</a>
            <a href="{{ url ('/AdminConsultarProductos')}}" class="icon-a"><i class="fa fa-archive"></i>consultar Productos</a>
            <a href="{{ url ('/AdminRegistroOrdenesCompra')}}" class="icon-a"><i class="fa fa-camera-retro"></i>Ordenes de compra</a>
            <a href="{{ url ('/AdminRegistroConsultaPagos')}}" class="icon-a"><i class="fa fa-money"></i>Registar-Consultar Pagos</a>
            <a href="{{ url('/AdminServiciosTecnicos')}}" class="icon-a"><i class="fa fa-user-circle-o"></i>Servicios Tecnicos</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
            <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>
        <form>
            <legend><b>CONSULTAR PRODUCTOS VENDIDOS</b></legend><br>

            <fieldset class="ventas">

                <caption><b>Datos de la Venta</b></caption>
            </fieldset>
            <legend><b></b></legend>
            <input type="text" pattern="[a-zA-Z]+" placeholder="Digite Nombre Completo">
            <input type="number" placeholder="Digite cedula o NIT">
            <input type="number" placeholder="Cod Servicio o Producto">
            <input type="date" placeholder="Digite fecha">
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">

            </fieldset>
        </form>
</body>

<br>
<caption><b>PRODUCTOS Y SERVICIOS MAS VENDIDOS</b></caption>
</div>
<section class="products-list">
    <div class="product-item" category="monitores">
        <img src="{{asset ('images/Imagencamara.png')}}" alt="">
        <a href="#">camara-Ref 001<br>20 unidades</a>
        $50.000

    </div>
    <div class="product-item" category="audifonos">
        <img src="{{asset('images/ImagenDVR.png')}}" alt="">
        <a href="#">DVR-Ref 002<br>2 unidades</a>
        $150.000
    </div>
    <div class="product-item" category="smartphones">
        <img src="{{asset('images/ImagenDiscoDuro.png')}}" alt="">
        <a href="#">Disco Duro-Ref 003<br>10 unidades</a>
        $200.000
    </div>
    <div class="product-item" category="smartphones">
        <img src="{{asset('images/Imagenups.png')}}" alt="">
        <a href="#">UPS-Ref 004 <br>3 unidades</a>
        $200.000
    </div>
    <div class="product-item" category="ordenadores">
        <img src="{{asset('images/ImagenFuentes.png')}}" alt="">
        <a href="#">Fuentes-Ref-005<br>2 unidades</a>
        $50.000
    </div>
    <div class="product-item" category="ordenadores">
        <img src="{{asset('images/Imagencamarawifi.png')}}" alt="">
        <a href="#">Camara Wifi Ref-006 <br>5 unidades</a>
        $80.000
    </div>

</section>
</div>
</div>