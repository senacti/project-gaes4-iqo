<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{asset('images/logoIQO.png')}}">
    <link rel="stylesheet" href="{{asset('css/stylevendedor.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylevendproductos.css')}}">
   
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

        <form>
       
            
            <fieldset class="ventas">
           
                <b>Consultar Productos</b><br>
               
            </fieldset>
            <br>
            <legend><b></b></legend>  <br>     
            <b>Nombre de Producto</b> <input type="text" pattern= "[a-zA-Z]+" placeholder="">
            <b>Código de Producto </b><input type="number" placeholder="">
          
        </fieldset>
   
        </form>
        <input type="submit" value="Enviar">
        <input type="reset"value="Limpiar">
        <br>
    </body>

    <br><caption><b>PRODUCTOS REGISTRADOS</b></caption>
    <br>
</div>
<section class="products-list">
    <div class="product-item">
        <img src="images/Imagencamara.png" alt="" >
        <a href="#">camara-Ref 001<br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
      
        
    </div>
    <div class="product-item">
        <img src="images/ImagenDVR.png" alt="" >
        <a href="#">DVR-Ref 002<br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
       
    </div>
    <div class="product-item">
        <img src="images/ImagenDiscoDuro.png" alt="" >
        <a href="#">Disco Duro-Ref 003<br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
       
    </div>
    <div class="product-item">
        <img src="images/Imagenups.png" alt="" >
        <a href="#">UPS-Ref 004 <br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
    
    </div>
    <div class="product-item">
        <img src="images/ImagenFuentes.png" alt="" >
        <a href="#">Fuentes-Ref-005<br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
   
    </div>
    <div class="product-item">
        <img src="images/Imagencamarawifi.png" alt="" >
        <a href="#">Camara Wifi Ref-006 <br></a>
        <b>Disponibles</b>
        <b>20 unidades</b>
      
    </div>
    
</section>
</div>

</body>
    
</html>