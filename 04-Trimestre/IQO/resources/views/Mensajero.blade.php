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
            <caption><b>REGISTRO ORDENES DE COMPRA</b></caption><br>
            <legend><b>Informacion Proveedor</b></legend>
            <fieldset class="datos">

                <input type="text" required pattern="[a-zA-Z]+" placeholder="Nombre Proveedor">
                <input type="number" required placeholder="Numero de documento o NIT">
                <input type="email" required placeholder="Correo Electronico">
                <input type="text" required placeholder="Direccion">
                <input type="number" required placeholder="Telefono de Contacto">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Ciudad Proveedor">
                <input type="date" required placeholder="Fecha Pedido">.
                <input type="button" required placeholder="Fecha Pedido">.
                <br>
               
                <input type="reset" value="Limpiar">
                <input type="search" value="Consultar Proveedor">
                <input type="button" value="Registar Proveedor">
                <input type="button" value="Editar Proveedor">
            </fieldset>
        </form>

        <form>
            <br>
            <legend><b>Informacion De Compra</b></legend>
            <br>
            <fieldset class="datos">
                <input type="number" required placeholder="Id Pedido">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Referencia Producto">
                <input type="numbre" required pattern="[a-zA-Z]+" placeholder="Serial Producto">
                <input type="text" required placeholder="Nombre Producto">
                <input type="text" required placeholder="Marca Producto">
                <input type="number" required placeholder="Cantidad Productos">
                <br>
                <input type="submit" value="Solicitar">
            </fieldset>
            <br>
        </form>
        <form>
            <legend><b>Novedades Ordenes De Compra</b></legend>
            <fieldset class="datos">
                <input type="number" required placeholder="Id Pedido">
                <input type="submit" value="Consultar">

            </fieldset>
            
        </form>

 
</body>
</html>