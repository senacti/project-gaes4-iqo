<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logoIQO.png')); ?>">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo e(asset('css/StyleIndex.css')); ?>" />
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
        <a class="navbar-brand" href="<?php echo e(url('/login')); ?>">
            <img src="<?php echo e(asset('images/logoIQO.png')); ?>" alt="logoIQO" width="170px">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo e(url('login')); ?>" style="font-size: 18px;">
                <i class="fas fa-user fa-lg"></i>Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('QuienesSomos')); ?>" style="font-size: 18px;">
                <i class="fa-solid fa-cloud-question fa-lg"></i>¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="font-size: 18px;"><i class="fa-duotone fa-book-open-reader fa-lg"></i> Catálogo</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo e(url('/CatalogoCamaras')); ?>">Cámaras</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/CatalogoDVR')); ?>">DVR</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/CatalogoDiscoDuro')); ?>">Discos Duros</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/CatalogoUPS')); ?>">UPS</a></li>
                <li><a class="dropdown-item" href=" <?php echo e(url('CatalogoFuentes')); ?>">Fuentes</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('Contacto')); ?>" style="font-size: 18px;"><i class="fa-solid fa-headset fa-lg"></i> Contacto</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" Required>
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </nav>
  <main>
      
  <h1>
      <div class="text-light">
        DISCOS DUROS
      </div>
      </h1>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
             <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?> "alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>"alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Discos Duros</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo e(asset('images/camara1.PNG')); ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Camara Domo Dahua</h5>
                <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                <P class="precio">$1000</P>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                  </div>
                  <small class="text-muted">10 Disponibles</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </main>
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
</html> <?php /**PATH C:\xampp\htdocs\alison\IQO21\resources\views/CatalogoDiscoDuro.blade.php ENDPATH**/ ?>