<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="{{asset('css/styleadministrador.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="logo">
        <img src="{{asset('images/logoIQO.png')}}" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>ADMINISTRADOR</b></a>
            <a href="{{ url ('/AdminConsultarClientes')}}" class="icon-a"><i class="fa fa-users icons"></i> Consultar Clientes</a>
            <a href="{{ url ('/AdminGerenteConsultarVentas')}}" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar ventas</a>
            <a href="{{ url ('/AdminConsultarProductosVendidos')}}" class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="{{ url ('/AdminRegistroTecnico')}}" class="icon-a"><i class="fa fa-tasks icons"></i> Registrar y consultar Tecnico</a>
            <a href="{{ url ('/AdminRegistrarProveedor')}}" class="icon-a"><i class="fa fa-list-alt icons"></i> Registrar y consultar Proveedor</a>
            <a href="{{ url ('/AdminRegistroProductos')}}" class="icon-a"><i class="fa fa-server"></i>Registrar Productos</a>
            <a href="{{ url ('/AdminConsultarProductos')}}" class="icon-a"><i class="fa fa-archive"></i>consultar Productos</a>
            <a href="{{ url ('/AdminRegistroOrdenesCompra')}}" class="icon-a"><i class="fa fa-camera-retro"></i>Ordenes de compra</a>
            <a href="{{ url ('/AdminRegistroConsultaPagos')}}" class="icon-a"><i class="fa fa-money"></i>Registar-Consultar Pagos</a>
            <a href="{{ url('/AdminServiciosTecnicos')}}"><i class="fa fa-user-circle-o"></i>Servicios Tecnicos</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
            <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>
        <form class="form">
            <caption><b>REGISTRO DEL PERSONAL TECNICO</b></caption><br>
            <legend><b>Registrar Tecnico</b></legend>
            <fieldset class="datos">

                <input type="text" required pattern="[a-zA-Z]+" placeholder="Nombre Completo">
                <input type="number" required placeholder="Numero de documento">
                <input type="email" required placeholder="Correo Electronico">
                <input type="text" required placeholder="Direccion">
                <input type="number" required placeholder="Telefono de Contacto">
                <br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </fieldset>
        </form>

        <form>
            <br>
            <legend><b>Consultar Personal</b></legend>
            <fieldset class="datos">
                <p>
                <h3>Realice la busqueda con:</h3>
                </p>
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Digite Nombre Completo">
                <input type="number" placeholder="Digite cedula o NIT">
                <br>
                <input type="submit" value="Consultar">
            </fieldset>
            <legend><b>Actualizar Informacion del personal</b></legend>
            <fieldset class="datos">

                <input type="submit" value="SI">

            </fieldset>
            
        </form>


</body>


</html>