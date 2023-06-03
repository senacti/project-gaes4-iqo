<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logoIQO.png">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="images/logoIQO.png">
    <link rel="stylesheet" href="css/styleadministrador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="logo">
        <img src="images/logoIQO.png" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>ADMINISTRADOR</b></a>
            <a href="Administrador.html" class="icon-a"><i class="fa fa-users icons"></i> Consultar Clientes</a>
            <a href="consultarventas.html" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar ventas</a>
            <a href="Productovendidos.html" class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="RegistrarTecnico.html" class="icon-a"><i class="fa fa-tasks icons"></i> Registrar y consultar Tecnico</a>
            <a href="RegistrarProveedores.html" class="icon-a"><i class="fa fa-list-alt icons"></i> Registrar y consultar Proveedor</a>
            <a href="RegistrarProductos.html" class="icon-a"><i class="fa fa-server"></i>Registrar Productos</a>
            <a href="ConsultarProductos.html" class="icon-a"><i class="fa fa-archive"></i>consultar Productos</a>
            <a href="OrdenesdeCompra.html" class="icon-a"><i class="fa fa-camera-retro"></i>Ordenes de compra</a>
            <a href="RegistrarConsultarPagos.html" class="icon-a"><i class="fa fa-money"></i>Registar-Consultar Pagos</a>
            <a href="ServiciosTecnicos.html" class="icon-a"><i class="fa fa-user-circle-o"></i>Servicios Tecnicos</a>
            <a href="rol.html">Volver a Roles</a>
            <a href="index (1).html.html">Cerrar Sesion</a>
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