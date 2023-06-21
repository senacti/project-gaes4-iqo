<!doctype html>
<html  lang =" es " >

<head>
    <juego de caracteres meta  =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    <meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1.0 " >
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
    <título><h1>ERROR 404</h1> </título >
    <enlace  rel =" hoja de estilo " href ="{{asset('css/estilos.css')}} " >
    <enlace  rel =" preconexión " href =" https://fonts.googleapis.com " >
    <enlace  rel =" preconexión " href =" https://fonts.gstatic.com " crossorigin >
    <ink  href =" https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap " rel =" hoja de estilo " >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

             <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
             <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500&display=swap" rel="stylesheet">
          <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
          <link rel="stylesheet" href="{{asset('style.css')}}" />

    </head >

<body>
<nav class="navbar navbar-expand-lg navbar navbar-light rounded sticky-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/login') }}">
            <img src="{{ asset('images/logoIQO.png') }}" alt="logoIQO" width="170px">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('login')}}" style="font-size: 18px;">
                <i class="fas fa-user fa-lg"></i>Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('QuienesSomos')}}" style="font-size: 18px;">
                <i class="fa-solid fa-cloud-question fa-lg"></i>¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="font-size: 18px;"><i class="fa-duotone fa-book-open-reader fa-lg"></i> Catálogo</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('/CatalogoCamaras')}}">Cámaras</a></li>
                <li><a class="dropdown-item" href="{{ url('/CatalogoDVR')}}">DVR</a></li>
                <li><a class="dropdown-item" href="{{url('/CatalogoDiscoDuro')}}">Discos Duros</a></li>
                <li><a class="dropdown-item" href="{{ url('/CatalogoUPS')}}">UPS</a></li>
                <li><a class="dropdown-item" href=" {{ url('CatalogoFuentes')}}">Fuentes</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('Contacto')}}" style="font-size: 18px;"><i class="fa-solid fa-headset fa-lg"></i> Contacto</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" Required>
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </nav>
    <div  clase =" contenedor " >
        <img  src ="{{asset('img/img1.svg')}}  " alt ="" >
        <h1 > La página que ha solicitado no se encuentra disponible </ h1 >
        <div  clase =" boton " >
            <a href="{{url('/login')}}">Volver Atras</a>
        </div> 
    </div> 

</body>
</html>