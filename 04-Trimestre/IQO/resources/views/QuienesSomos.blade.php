<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('css/StyleIndex.css')}}" />
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="tu-integridad" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-***********" crossorigin="anonymous" />
     <style>
        .carousel-item {
          height: 400px;
          background-color: black;
        }
      </style>
</head>
<body class="bg-dark">

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
      <div class="containersss">
        <h1>CONTROL Y SEGURIDAD S.A.S</h1>
    </div>

    <section class="porfolios container">
        <div class="porfolio">
            <div class="porfolio-1">
                <h3>Historia</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus velit eveniet provident
                    similique, sequi facere rem perspiciatis, enim repudiandae neque sint! Id corrupti earum aperiam
                    veniam a repudiandae soluta exercitationem?
                </p>
                <hr>
            </div>
        </div>
        <div class="porfolio">
            <div class="porfolio-2">
                <h3>Mision</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, maxime! Dicta, laudantium ullam
                    unde enim aliquam voluptatem! Hic ut quae numquam provident asperiores dicta, illo rerum ipsa, nisi
                    similique fugiat.
                </p>
                <hr>
            </div>
        </div>
        <div class="porfolio">
            <div class="porfolio-3">
                <h3>Vision</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi optio id, sequi expedita neque fugiat
                    earum quia, praesentium nobis dolores repudiandae doloribus dignissimos quos vel asperiores quasi
                    numquam. Voluptates, omnis.
                </p>
                <hr>
                <a href="#" class="btn-4">Mas informacion</a>
            </div>
        </div>
    </section>
    
</body>
</html>