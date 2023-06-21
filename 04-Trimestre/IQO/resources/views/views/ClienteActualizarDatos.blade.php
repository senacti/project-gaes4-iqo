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
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
     <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
     <link rel="stylesheet" href="{{asset('css/modal.css')}}">
     <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
     <link rel="stylesheet" href="{{asset('style.css')}}" />
</head>
<body>
    
      <div class="logo">
        <img src="{{asset('logo/logoIQO.png')}}" alt="logo">

    <div id="mySidenav" class="sidenav">
        <i class="fa fa-address-card-o icons"></i><b></b>CLIENTE</b></a>
      <a href="{{ url('/ClienteActualizarDatos')}}"class="icon-a"><i class="fa fa-users icons"></i> Actualizar Datos</a>
      <a href="{{ url('ClienteConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar Ordenes de Pedido</a>
      <a href="{{ url ('ClienteCreaOrdenPedido')}}"class="icon-a"><i class="fa fa-list icons"></i> Crear Ordenes de Pedido</a>
      <a href="{{url('/CatalogoCamaras')}}">Catalogo</a>
      <a href="{{ url('/Roles')}}">Volver a Roles</a>
      <a href="{{ url('/login')}}">Cerrar Sesion</a>
    </div>
    <div class="contenedor">
        <form action="Clienteregvalid.html" class="form">
            <div class="form-header">
                <h1 class="form-title"><span>Contacto</span></h1>
            </div>

            <label for="nombres" class="form-label text-white">Nombre Completo</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Escriba su nombre Completo">

            <label for="No.Identificacion" class="form-label text-white">Tipo Identificacion</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Tipo Identificacion">

            <label for="Identificacion" class="form-label text-white">Numero Identificacion</label>
            <input type="number" id="nombres" class="form-imput" placeholder="No. Identificacion">

            <label for="Identificacion" class="form-label text-white">Nombre de Usuario</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Ingrese Usuario">

            <label for="Identificacion" class="form-label text-white">Contraseña</label>
            <input type="password" id="nombres" class="form-imput" placeholder="Ingrese Contraseña">

            <label for="direccion" class="form-label text-white"> Direccion:</label>
            <input type="text" class="form-input" id="direccion" placeholder="Escriba su direccion">

            <label for="email" class="form-label text-white"> Correo Electrónico</label>
            <input type="email" class="form-input" id="direccion" placeholder="Correo Electronico">

            <label for="FechaNacimiento" class="form-label text-white"> fecha Nacimiento:</label>
            <input type="date" class="form-input" id="direccion" placeholder="Fecha Nacimiento">

            <label for="No.Contacto" class="form-label text-white"> No. Contacto</label>
            <input type="number" class="form-input" id="direccion" placeholder="No. Contacto">

            <input type="submit" class="btn-submit" value="Actualizar Datos">Actualizar Datos</label>
        </form>
    </div>
</body>
</html>