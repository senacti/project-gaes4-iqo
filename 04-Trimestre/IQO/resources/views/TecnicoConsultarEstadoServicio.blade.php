<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleTecniconov.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

</head>

    <body>
        <div class="logo">
            <img src="{{asset('logo/logoIQO.png')}}" alt="logo"> 
                        <h1><center>INVENTORIES AND QUICK ORGANIZATION</center></h1>
                        
    
        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>TECNICO</b></a>
          <a href="{{url('/TecnicoRegistroNovedadesServicio')}}"class="icon-a"><i class="fa fa-users icons"></i> Registrar Novedades del Servicio</a>
          <a href="{{url('/TecnicoConsultarServiciosTecnicos')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Novedades</a>
          <a href="{{url('TecnicoConsultarEstadoServicio')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Estado del Servicio o Producto</a>
          <a href="{{ url('/Roles')}}">Volver a Roles</a>
          <a href="{{ url('/login')}}">Cerrar Sesion</a>

        </div>
        <b>CONSULTAR ESTADO DEL SERVICIO</b><br>
          
        <br><b>Ingresar Codigo del Servicio</b>
        <input type="number" required  placeholder=""><br>
        <br><section class="products-list"><br>
            <div class="product-item" category="monitores">
                
                <a href="#">Johan Rodriguez CC 1023888540</a>
                Instalacion<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
                
            </div>
            <div class="product-item" category="audifonos">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Mantenimiento<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Inactivo
            </div>
            <div class="product-item" category="smartphones">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Instalacion<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            <div class="product-item" category="smartphones">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Mantenimiento<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            <div class="product-item" category="ordenadores">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Instalacion<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            <div class="product-item" category="ordenadores">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Mantenimiento<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            <div class="product-item" category="ordenadores">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Instalacion<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            <div class="product-item" category="ordenadores">
                <a href="#">Johana Rodriguez CC 1023887540</a>
                Mantenimiento<br>
                Ref 001<br>
                Novedad:<br>
                Estado:Activo
            </div>
            </body>

            </html>