<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

    <body>
        <div class="logo">
            <img src="{{ asset ('images/logoIQO.png')}}" alt="logo">
                        <h1><center>INVENTORIES AND QUICK ORGANIZATION</center></h1>
    
        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>VENDEDOR</b></a>
            <a href="{{url('VendedorRegistroConsultaClientes')}}  "class="icon-a"><i class="fa fa-users icons"></i> Registrar y Consultar Clientes</a>
            <a href="{{url('VendedorRegistrarVentas')}}"class="icon-a"><i class="fa fa-shopping-bag icons"></i>Registrar Ventas</a>
            <a href="{{url('VendedorConsultarProductosVendidos')}}"class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="{{url('VendedorPagos ')}}"class="icon-a"><i class="fa fa-tasks icons"></i> Adjuntar Comprobante de Pago</a>
            <a href="{{url('VendedorConsultarVentas')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ventas</a>
            <a href="{{url('VendedorCreaOrdenesPedido')}}"class="icon-a"><i class="fa fa-user icons"></i> Crear Ordenes de Pedido</a>
            <a href="{{url('VendedorConsultarOrdenPedido')}}"class="icon-a"><i class="fa fa-list-alt icons"></i> Consultar Ordenes de Pedido</a>
            <a href="{{url('VendedorConsultarProductosVendidos')}}"class="icon-a"><i class="fa fa-suitcase icons"></i> Consultar Productos Registrados</a>
            <a href="{{url('VendedorConsultarEstadoInventario')}} "class="icon-a"><i class="fa fa-unlock icons"></i> Consultar Estado de Productos</a>
            <a href="{{ url('/Roles')}}">Volver a Roles</a>
            <a href="{{ url('/login')}}">Cerrar Sesion</a>
        </div>

        <form class="form">
            <caption><b>REGISTRO Y CONSULTA DE CLIENTES</b></caption>
            <br>
            <br> <legend><b>Registrar Clientes</b></legend>
        <fieldset class="datos">
            
            <input type="text" required pattern= "[a-zA-Z]+" maxlength="40"size="40" placeholder="Digite Nombre Completo">
            <input type="number" required maxlength="40"size="40" placeholder="Digite cedula o NIT"><br>
            <input type="email" required maxlength="30"size="30" placeholder="Digite Correo Electronico">
            <input type="text" required maxlength="30"size="30" placeholder="Digite Direccion"><br>
            <input type="number" max="500" required  placeholder="Digite Telefono de Contacto"><br>
            <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
        </fieldset>
        </form>

        <form>
            <br><legend><b>Consultar Clientes</b></legend>
            <fieldset class="datos">
                <input type="submit" value="Cliente Empresa">
                <input type="submit" value="Cliente Natural">
                <p><h3>Realice la busqueda con:</h3></p>
                <input type="text" required pattern= "[a-zA-Z]+"maxlength="40"size="40"placeholder="Digite Nombre Completo">
                <input type="number" placeholder="Digite cedula o NIT">
            </fieldset>
            <legend><b>Actualizar Informacion de Clientes</b></legend>
                <fieldset class="datos">
                
                <input type="submit" value="SI">
              
            </fieldset>
        
            </form>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">

            
    </body>
    

</html>