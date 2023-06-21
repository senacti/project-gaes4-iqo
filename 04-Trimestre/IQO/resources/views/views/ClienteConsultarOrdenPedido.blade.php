<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="{{asset('css/styleadministrador.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleordenesped2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
     <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
     <link rel="stylesheet" href="{{asset('style.css')}}" />
</head>
<body>
  <div class="logo">
    <img src="{{asset('logo/logoIQO.png')}}" alt="logo">
                <h1><center>INVENTORIES AND QUICK ORGANIZATION</center></h1>
                <div id="mySidenav" class="sidenav">
                    <i class="fa fa-address-card-o icons"></i><b></b>CLIENTE</b></a>
                    <a href="{{ url('/ClienteActualizarDatos')}}"class="icon-a"><i class="fa fa-users icons"></i> Actualizar Datos</a>
                    <a href="{{ url('ClienteConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Ordenes de Pedido</a>
                    <a href="{{ url ('ClienteCreaOrdenPedido')}}"class="icon-a"><i class="fa fa-list icons"></i> Crear Ordenes de Pedido</a>
                    <a href="{{url('/CatalogoCamaras')}}">Catalogo</a>
                    <a href="{{ url('/Roles')}}">Volver a Roles</a>
                    <a href="{{ url('/login')}}">Cerrar Sesion</a>
                </div>          
    <form>
        <legend><b>CONSULTAR ORDENES DE PEDIDO</b></legend>
        <fieldset class="datos">
            <b>Búsqueda:</b><br>
            <input type="text" required pattern= "[a-zA-Z]+" placeholder="Digite Nombre ">
            <input type="number" placeholder="Digite cedula o NIT">
            <input type="number" placeholder="Cod Producto o Servicio">
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
</body>
</html>