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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
     <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
     <link rel="stylesheet" href="{{asset('style.css')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/styleordenespedido.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <title>IQO</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/script.js"></script>
  <script src="js/catalogo.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
   
      <div class="logo">
        <img src="{{asset('logo/logoIQO.png')}}" alt="logo">
                    <h2><center>INVENTORIES AND QUICK ORGANIZATION</center></h2>

    <div id="mySidenav" class="sidenav">
        <i class="fa fa-address-card-o icons"></i><b></b>CLIENTE</b></a>
        <a href="{{ url('/ClienteActualizarDatos')}}"class="icon-a"><i class="fa fa-users icons"></i> Actualizar Datos</a>
        <a href="{{ url('ClienteConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Ordenes de Pedido</a>
        <a href="{{ url ('ClienteCreaOrdenPedido')}}"class="icon-a"><i class="fa fa-list icons"></i> Crear Ordenes de Pedido</a>
        <a href="{{url('/CatalogoCamaras')}}">Catalogo</a>
        <a href="{{ url('/Roles')}}">Volver a Roles</a>
        <a href="{{ url('/login')}}">Cerrar Sesion</a>
    </div>
    <div class="wrap">
        <h3>Escoge un producto</h3><br>
        <div class="store-wrapper">
            <div class="category_list">
             
                <a href="#" class="category_item" category="ordenadores">Camaras</a>
                <a href="#" class="category_item" category="laptops">Discos</a>
                <a href="#" class="category_item" category="smartphones">Cables</a>
               
            </div>
            <section class="products-list">
                <div class="product-item" category="ordenadores">
                    <img src="{{asset('images/Imagencamara.png')}}" alt="" >
                    <a href="#">camara-Ref 001<br>20 unidades</a>
                    $50.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                    
                </div>
                <div class="product-item" category="laptops">
                    <img src="{{asset('images/ImagenDVR.png')}}" alt="" >
                    <a href="#">DVR-Ref 002<br>2 unidades</a>
                    $150.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="laptops">
                    <img src="{{asset('images/ImagenDiscoDuro.png')}}" alt="" >
                    <a href="#">Disco Duro-Ref 003<br>10 unidades</a>
                    $200.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="laptops">
                    <img src="{{asset('images/Imagenups.png')}}" alt="" >
                    <a href="#">UPS-Ref 004 <br>3 unidades</a>
                    $200.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="smartphones">
                    <img src="{{asset('images/ImagenFuentes.png')}}" alt="" >
                    <a href="#">Fuentes-Ref-005<br>2 unidades</a>
                    $50.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="ordenadores">
                    <img src="{{asset('images/Imagencamarawifi.png')}}" alt="" >
                    <a href="#">Camara Wifi Ref-006 <br>5 unidades</a>
                    $80.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="ordenadores">
                    <img src="{{asset('images/Imagencamwifiext.png')}}" alt="" >
                    <a href="#">Camara Wifi Exterior Ref-007 <br>4 unidades</a>
                    $90.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
                <div class="product-item" category="ordenadores">
                    <img src="{{asset('images/ImagencamwifiUPTZ.png')}}" alt="" >
                    <a href="#">Camara Wifi UPTZ Exterior Ref-008 <br>2 unidades</br></a>
                    $90.000
                    <i class="fa fa-cart-arrow-down icons">Agregar</i>
                </div>
            </section>
        </div>
    </div>
</body>
</html>