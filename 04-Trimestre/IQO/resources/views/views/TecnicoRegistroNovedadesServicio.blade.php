!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleordenespedido.css')}}">
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
        <b>REGISTRAR NOVEDADES DEL SERVICIO O PRODUCTO</b><br>
          
        <br><b>Ingresar Codigo del Servicio o Producto</b>
        <input type="number" required  placeholder=""><br>
        <br><form class="form">
        <fieldset class="datos">
            
            <b>Nombre Completo Cliente</b> <input type="text" required pattern= "[a-zA-Z]+" placeholder="">
            <b>Cedula o NIT </b><input type="number" required  placeholder=""><br>
            <b>Telefono de Contacto </b><input type="number" required placeholder="">
            <b>Nombre Completo Tecnico</b> <input type="text" required pattern= "[a-zA-Z]+" placeholder=""><br>
            <b>Fecha de la Novedad</b> <input type="date" required placeholder="">
            <br><b>Fecha Revisión del Producto</b>
            <input type="date" required placeholder=""><br>
            <b>Nombre Producto o Servicio</b> <input type="text" required pattern= "[a-zA-Z]+" placeholder=""><br>
            <b>Código de Servicio o Factura</b> <input type="number" required  placeholder=""><br>
            <b>Tipo de Novedad</b> <input type="text" required pattern= "[a-zA-Z]+" placeholder="">
            <input type="text" required pattern= "[a-zA-Z]+" maxlength="100"size="100" placeholder="Descripcion de Novedad">
            
          
        </fieldset>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
        </form>
    </body>

    </html>