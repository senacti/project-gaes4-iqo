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
            <a href="{{ url ('/AdminRegistroConsultaPagos')}} class="icon-a"><i class="fa fa-money"></i>Registar-Consultar Pagos</a>
            <a href="{{ url('/AdminServiciosTecnicos')}}" class="icon-a"><i class="fa fa-user-circle-o"></i>Servicios Tecnicos</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
            <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>

        <form class="form">
            <caption><b>SERVICIOS TECNICOS</b></caption><br>
            <br>
            <legend><b>Agendar Servicio Tecnico</b></legend>
            <fieldset class="datos">
                <input type="number" required placeholder="Id Servicio">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Categoria Servicio">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Descripcion Servicio">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Nombre Servicio">
                <input type="number" required placeholder="Precio Servicio">
                <input type="text" required placeholder="Estado Servicio">
                
                <br>
                
            </fieldset>
        

        
            <br>
            <legend><b>Informacion Del Cliente</b></legend>
            <br>
            <fieldset class="datos">
              
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Digite Nombre Completo">
                <input type="number" placeholder="Digite cedula o NIT">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Direccion del servicio">
                <input type="number" placeholder="Numero de Contacto">
                <br>

                <input type="submit" value="Agendar Servicio">
            
                <input type="reset" value="Limpiar">
            </fieldset>
            <br>
            <legend><b>Consultar Servicios Tecnicos</b></legend>
            <br>
            <fieldset class="datos">
                <input type="number" required placeholder="Id Servicio">
                <input type="number" placeholder="Nombre Cliente">
                <input type="number" placeholder="Digite cedula o NIT">
                <input type="button" value="Consultar">

            </fieldset>
            <br>
        </form>
        <form>
            <legend><b>Registar Novedad Servicio</b></legend>
            <br>
            <fieldset class="datos">
                <input type="number" required placeholder="Id Servicio">
                <input type="text" placeholder="Digite novedad">
            <input type="button" value="Guardar">
        </fieldset>
        </form>


</body>


</html>