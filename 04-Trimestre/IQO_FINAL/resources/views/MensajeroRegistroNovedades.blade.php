<!DOCTYPE html>
<html lang="en">
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
        <img src="{{asset('logo/logoIQO.png')}}" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>MENSAJERO</b></a>
            <a href="{{url('/Mensajero')}}" class="icon-a"><i class="fa fa-users icons"></i> Consultar Ordenes de Compra</a>
            <a href="{{url('/MensajeroregistroNovedades')}}" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Registrar Novedades Pedido</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
                    <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>
        <form class="form">
            <caption><b>REGISTRAR NOVEDADES DE PEDIDO</b></caption><br>
            <BR></BR>
            <legend><b><h3>Registrar Novedad</h3></b></legend>
            <br>
            <fieldset class="datos">

                <input type="date" required pattern="[a-zA-Z]+" placeholder="Fecha Novedad Pedido">
                <input type="text" required placeholder="Estado Novedad Pedido">
                <input type="text" required placeholder="Nombre Empleado">
                <input type="numer" required placeholder="idCargo">
                <input type="text" required placeholder="Direccion Proveedor">
                <input type="text" required placeholder="Nombre Proveedor">
                <br>
                
            </fieldset>
            <br>
            <legend><b><h3>Informacion Novedad</h3></b></legend>
            <br>
            <div container>
                <input type="text" placeholder="Escriba La Novedad Pedido">
                <input type="submit" value="Enviar">
                 </div>
            
        </form>
</body>
</html>