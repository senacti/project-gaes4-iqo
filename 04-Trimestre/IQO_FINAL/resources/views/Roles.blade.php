<!DOCTYPE html>
<html lang="es">
  <head>
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/stylerol.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}" />
  </head>
  <body>

    <form action="" method="POST" id="form">
      <div class="form">
        <h2><center>ROL</center></h2>
        <br />
        
        <a href="{{url('/AdminConsultarClientes')}}" 
          ><h2><center>ADMINISTRADOR Y GERENTE</center></h2></a
        >
      </div>
    </form>
    <form class="p1" action="" method="POST" id="form">
      <h2><center>ROL</center></h2>
      <br />
      <a href="{{url('/VendedorConsultarEstadoInventario')}}"
        ><h2><center>VENDEDOR</center></h2></a
      >
    </form>
    <form class="p2" action="" method="POST" id="form">
      <h2><center>ROL</center></h2>
      <br />
      <a href="{{url('/TecnicoConsultarEstadoServicio')}}"
        ><h2><center>TECNICO</center></h2></a
      >
    </form>
    <form class="p3" action="" method="POST" id="form">
      <h2><center>ROL</center></h2>
      <br />
      <a href="{{url('/Cliente')}}"
        ><h2><center>CLIENTE</center></h2></a
      >
    </form>
    <form class="p4" action="" method="POST" id="form">
      <h2><center>ROL</center></h2>
      <br />
      <a href="{{url('/Mensajero')}}"
        ><h2><center>MENSAJERO</center></h2></a
      >
      <a href="{{url('login')}}">Cerrar Sesion</a>
    </form>
  </body>
</html>
