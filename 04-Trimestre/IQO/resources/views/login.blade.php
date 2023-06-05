<!DOCTYPE html>
<html lang="en">
<head>
  //ok 
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
    <section>
      <div class="row g-0">
        <div class="col-lg-7">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item img1 min-vh-100 active">
                <img src="{{ asset('images/img1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold text-light">Seguridad Para tu Hogar o Empresa</h5>
                </div>
              </div>
              <div class="carousel-item img2 min-vh-100">
                <img src="{{ asset('images/img2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold text-light">Visita Nuestro Catálogo</h5>
                </div>
              </div>
              <div class="carousel-item img3 min-vh-100">
                <img src="{{ asset('images/img3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold text-light">Acércate a nuestra Tienda</h5>
                </div>
              </div>
              <div class="carousel-item img4 min-vh-100">
                <img src="{{ asset('images/img4.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold text-light">No olvides Registrarte</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>                                                       ||
          </div>
        </div>
        <div class="col-lg-5 d-flex flex-column  min-vh-100">
            <div class="px-lg-3 pt-lg-2 pb-lg-1 p-1 w-100">
                <img src="{{ asset('logo/logoempresa (1).png') }}" class="img-fluid" width="150px">
              </div>
          <div class="px-lg-5 py-lg-4 p-4">
            <h1 class="font-weight-bold mb-4 text-center text-light" style="font-size: 50px;">
              Bienvenido a CONTROL & SEGURIDAD S.A.S
            </h1>
            <form action="{{ url('Roles') }}" class="mb-5 row mt-3 g-3 needs-validation" novalidate>

              <div class="mb-4 position-relative">
                <label for="exampleInputEmail1" class="form-label font-weight-bold form-text text-light" style="font-size: 20px;">
                    <i class="fa-light fa-square-envelope fa-lg"></i> Correo Electrónico</label>
                <input type="email" class="form-control bg-dark-x" placeholder="Ingresa tu correo" id="exampleInputEmail1"
                  aria-describedby="emailHelp" Required>
                <div class="valid-tooltip">
                  Correo Válido
                </div>
                <div class="invalid-tooltip">
                  Es necesario escribir un correo válido
                </div>
              </div>
              <div class="mb-4 position-relative">
                <label for="exampleInputPassword1"
                  class="form-label font-weight-bold form-text text-light" style="font-size: 20px;"><i class="fa-sharp fa-regular fa-key fa-lg"></i>Contraseña</label>
                <input type="password" class="form-control bg-dark-x" placeholder="Ingresa tu contraseña"
                  id="exampleInputPassword1" Required>
                <div class="valid-tooltip">
                  Válido
                </div>
                <div class="invalid-tooltip">
                  Es necesario escribir la contraseña
                </div>
                <a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">¿Olvidaste tu contraseña?</a>
              </div>
              <button type="submit" class="btn btn-primary w-100" style="font-size: 20px;"><i class="fa-regular fa-right-to-bracket fa-lg" href="{{url('Roles')}}"></i> Iniciar Sesion</button>
            </form>
  
            <p class="font-weight-bold text-center text-muted">Iniciar Sesión con</p>
            <div class="d-flex justify-content-between align-items-center">
              <button type="submit" class="btn btn-outline-light flex-grow-1 mr-2"><i
                  class="fa-brands fa-google lead mr-2"></i> Google </button>
              <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2"><i
                  class="fa-brands fa-facebook-f lead mr-2"></i> Facebook </button>
                  <button type="submit" class="btn btn-outline-light flex-grow-1">
                    <i class="fab fa-discord lead mr-2"></i> Discord
                </button>
            </div>
          </div>
          <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100">
            <p class="d-inline-black mb-0 form-text text-light">¿No tienes cuenta?</p>
            <a href="{{url('Registro')}}" class="text-light font-weight-bold text-decoration-none" style="font-size: 20px;"><i class="fa-solid fa-user-plus"></i> Registrate - Haz click
              aqui</a>
          </div>
      </div>
  
    </section>
    <script>
  
      (() => {
        'use strict'
  
  
        const forms = document.querySelectorAll('.needs-validation')
  
  
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
  
            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    <script src="https://pro.fontawesome.com/releases/v6.0.0-beta3/js/all.js" integrity="tu-integridad" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>