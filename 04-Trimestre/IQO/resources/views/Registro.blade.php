<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="icon" type="image/png" href="images/logoIQO.png">
     <link rel="stylesheet" href="css/modal.css">
     <script src="js/bootstrap.bundle.min.js FINAL.js"></script>
  <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index (1).html">
            <img src="logo/logoIQO.png" alt="logoIQO" width="200px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index (1).html">Iniciar Sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="QuienSomos.html">¿Quienes Somos?</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Catálogo
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="ProCamaras.html">Cámaras</a></li>
                  <li><a class="dropdown-item" href="Prodvr.html">DVR</a></li>
                  <li><a class="dropdown-item" href="ProDiscosDuros.html">Discos Duros</a></li>
                  <li><a class="dropdown-item" href="Proups.html">UPS</a></li>
                  <li><a class="dropdown-item" href="ProFuentes.html">Fuentes</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contactenos.html">Contacto</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" Required>
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="contenedor">
        <form action="registrarsevalid.html" class="form">
            <div class="form-header">
                <h1 class="form-title"><span>Contacto</span></h1>
            </div>

            <label for="nombres" class="form-label text-white">Nombre Completo</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Escriba su nombre Completo" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario Escribir su nombre
            </div>
            <label for="No.Identificacion" class="form-label text-white">Tipo Identificacion</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Tipo Identificacion" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir el tipo de Identificación
            </div>
            <label for="Identificacion" class="form-label text-white">Numero Identificacion</label>
            <input type="number" id="nombres" class="form-imput" placeholder="No. Identificacion" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir el No. Identificación
            </div>
            <label for="Identificacion" class="form-label text-white">Nombre de Usuario</label>
            <input type="text" id="nombres" class="form-imput" placeholder="Ingrese Usuario" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir un Nombre de Usuario
            </div>
            <label for="Identificacion" class="form-label text-white">Contraseña</label>
            <input type="password" id="nombres" class="form-imput" placeholder="Ingrese Contraseña" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir la contraseña
            </div>
            <label for="direccion" class="form-label text-white"> Direccion:</label>
            <input type="text" class="form-input" id="direccion" placeholder="Escriba su direccion" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir la dirección
            </div>
            <label for="email" class="form-label text-white"> Correo Electrónico</label>
            <input type="email" class="form-input" id="direccion" placeholder="Correo Electronico" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir el correo electrónico
            </div>
            <label for="FechaNacimiento" class="form-label text-white"> fecha Nacimiento:</label>
            <input type="date" class="form-input" id="direccion" placeholder="Fecha Nacimiento" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario elegir la fecha de nacimiento
            </div>
            <label for="No.Contacto" class="form-label text-white"> No. Contacto</label>
            <input type="number" class="form-input" id="direccion" placeholder="No. Contacto" required>
            <div class="valid-tooltip">
              Válido
            </div>
            <div class="invalid-tooltip">
              Es necesario escribir el No. Contacto
            </div>
            <input type="submit" class="btn-submit" value="Registrarse">Registrarse</label>
        </form>
    </div>
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
</body>
</html>