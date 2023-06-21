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
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
     <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
     <link rel="stylesheet" href="{{asset('style.css')}}" />
</head>
<body>
    
    <div class="logo">
        <img src="{{asset('logo/logoIQO.png')}}" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>CLIENTE</b></a>
            <a href="{{ url('/ClienteActualizarDatos')}}"class="icon-a"><i class="fa fa-users icons"></i> Actualizar Datos</a>
                    <a href="{{ url('ClienteConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Ordenes de Pedido</a>
                    <a href="{{ url ('ClienteCreaOrdenPedido')}}"class="icon-a"><i class="fa fa-list icons"></i> Crear Ordenes de Pedido</a>
                    <a href="{{url('/CatalogoCamaras')}}">Catalogo</a>
                    <a href="{{ url('/Roles')}}">Volver a Roles</a>
                    <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>
    <form action="">

        <img src="{{asset('images/check.png')}}" alt="">
        <h2>Gracias</h2>
        <p>Ya has sido registrado, puedes Iniciar Sesión</p>
        <button type="button" class="button-sumbit">OK</button>
        <a href="{{url('/Cliente')}}">Volver</a>
    </form>
</body>
</html>