<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="index (1).html">Cerrar Sesion</a>
        </div>

        <form class="form">
            <caption><b>REGISTRO Y CONSULTA DE PAGOS</b></caption><br>
            <BR></BR>
            <legend><b><h3>Registro de Pagos</h3></b></legend>
            <br>
            <fieldset class="datos">

                <input type="text" required pattern="[a-zA-Z]+" placeholder="Tipo Cliente">
                <input type="number" required placeholder="Cc o Nit">
                <input type="number" required placeholder="Nombre Cliente">
                <input type="email" required placeholder="Correo Electronico">
                <input type="text" required placeholder="Direccion">
                <input type="number" required placeholder="Telefono de Contacto">
                <br>
                
            </fieldset>
            <br>
            <legend><b><h3>Informacion Pago</h3></b></legend>
            <br>
            <fieldset class="datos">
                <input type="number" placeholder="IdPago">
                <input type="text" required pattern="[a-zA-Z]+" placeholder="Medio De Pago">
                <input type="number" placeholder="Valor De Pago">
                <input type="text" placeholder="Comprobante">
                <br>
                <input type="submit" value="Pagar">
            </fieldset>
            <br>
            <legend><b>Consultar Pagos</b></legend>
            <br>
            <fieldset class="datos">
                <input type="number" placeholder="IdPago">
                <input type="text" placeholder="Comprobante">
                <input type="button" value="Consutar">

            </fieldset>
            
        </form>


</body>


</html>