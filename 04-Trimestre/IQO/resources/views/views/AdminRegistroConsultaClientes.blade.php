<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylevendedor.css') }}">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body>
        <div class="logo">
            <img src="{{asset('logo/logoIQO.png')}}" alt="logo">
                        <h1><center>INVENTORIES AND QUICK ORGANIZATION</center></h1>
    
        <div id="mySidenav" class="sidenav">
          <a href="{{url('/Registro')}}"class="icon-a"><i class="fa fa-users icons"></i> Registrar Clientes</a>
          <a href="{{url('/Cliente')}}" class="icon-a"><i class="fa fa-dashboard icons"></i> Consultar Clientes</a>
          <a href="{{url('/VendedorRegistrarVenta')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Registrar Ventas</a>
          <a href="{{url('/VendedorConsultarProductosVendidos')}}"class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
          <a href="{{url('/AdminRegistroConsultaPagos')}}"class="icon-a"><i class="fa fa-tasks icons"></i> Adjuntar Comprobante de Pago</a>
          <a href="{{url('/AdminGerenteConsultarVentas')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ventas</a>
          <a href="{{url('/ClienteCreaOrdenPedido')}}"class="icon-a"><i class="fa fa-user icons"></i> Crear Ordenes de Pedido</a>
          <a href="{{url('ClienteConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ordenes de Pedido</a>
          <a href="{{ url('/Roles')}}">Volver a Roles</a>
          <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>

        <form class="form">
            <caption><b>REGISTRO Y CONSULTA DE CLIENTES</b></caption>
        <fieldset class="datos">
            <legend><b>Registrar Clientes</b></legend>
            <input type="text" placeholder="Digite Nombre Completo">
            <input type="text" placeholder="Digite cedula o NIT">
            <input type="text" placeholder="Digite Correo Electronico">
            <input type="text" placeholder="Digite Direccion">
            <input type="text" placeholder="Digite Telefono de Contacto">
        </fieldset>
        </form>

        <form>
            <fieldset class="datos">
                <legend><b>Consultar Clientes</b></legend>
                <input type="submit" value="Cliente Empresa">
                <input type="submit" value="Cliente Natural">
                <p><h3>Realice la busqueda con:</h3></p>
                <input type="text" placeholder="Digite Nombre Completo">
                <input type="number" placeholder="Digite cedula o NIT">
                <legend><b>Actualizar Informacion de Clientes</b></legend>
                <input type="submit" value="SI">
                <input type="submit" value="NO">
            </fieldset>
            <input type="submit" value="Enviar">
                <input type="submit" value="Limpiar">
            </form>

            
    </body>
    

</html>