<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>IQO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poopins:wght@400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #dfe9f5
    }

    nav {
      position: fixed;
      top: 0;
      bottom: 0;
      height: 100%;
      left: 0;
      background: #fff;
      width: 90px;
      overflow: hidden;
      transition: width 0.2s linear;
      box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      display: flex;
      transition: all 0.5s ease;
      margin: 10px 0 0 10px;
    }

    .logo img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
    }

    .logo span {
      font-weight: bold;
      padding-left: 1px;
      font-size: 18px;
      text-transform: uppercase;
    }

    a {
            position: relative;
            color: rgb(85, 83, 83);
            font-size: 14px;
            display: table;
            width: 400px;
            padding: 10px;
        }

    .fas {
      position: relative;
      width: 70px;
      height: 40px;
      top: 14px;
      font-size: 20px;
      text-align: center;
    }

    .nav-item {
      position: relative;
      top: 12px;
      margin-left: 10px;
    }

    .nav-titulo {
      position: relative;
      top: 12px;
      margin-left: 1px;
    }

    a:hover {
      background: #eee;
    }

    nav:hover {
      width: 300px;
      transition: all 0.5s ease;
    }

    .logout {
      position: absolute;
      bottom: 0;
    }

    .form-container {
      margin-top: 100px;
      /* Espacio para el navbar fijo */
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      transition: margin-top 0.2s linear;
    }

    /* Estilos adicionales que puedes ajustar según tus necesidades */
    legend {
      font-weight: bold;
    }

    h3 {
      margin-top: 10px;
    }

    input[type="submit"] {
      margin-right: 10px;
    }

    .form-box {
      margin-top: 50px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .navbar-logo {
      height: 50px;
    }

    .custom-container {
      border: 2px solid #283747;
      padding: 20px;
      background-color: #17202A;
      color: #FFFFFF;
      border-radius: 10px;
    }

    nav ul {
      list-style: none;
      padding: 0;
    }

    nav li {
      margin-bottom: 10px;
    }

    nav a {
      display: block;
      padding: 10px;
      text-decoration: none;
    }

    nav i {
      margin-right: 10px;
    }

    /* Estilos para hacer el sidebar responsive */
    @media (max-width: 767px) {
      nav {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background-color: #f8f9fa;
        overflow-y: auto;
        transition: 0.3s;
      }

      nav.open {
        left: 0;
      }

      .content {
        margin-left: 250px;
        transition: 0.3s;
      }

      .menu-toggle {
        display: block;
        text-align: center;
        padding: 10px;
        cursor: pointer;
      }
    }
  </style>
</head>

<body>


  <nav>
    <ul>
      <li>
        <a href="<?php echo e(url ('/home')); ?>" class="logo">
          <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
          <span class="nav-titulo">CLIENTE</span>
        </a>
      </li>
      <li><a href="<?php echo e(url ('/ClienteActualizarDatos')); ?>">
          <i class="fas fa-user"></i>
          <span class="nav-item">Actualizar Datos</span>
        </a></li>
        <li><a href="<?php echo e(url ('/ClienteConsultarOrdenPedido')); ?>">
          <i class="fas fa-archive"></i>
          <span class="nav-item">Consultar Orden Pedido</span>
        </a></li>
      <li><a href="<?php echo e(url ('/ClienteCreaOrdenPedido')); ?>">
          <i class="fas fa-shopping-bag"></i>
          <span class="nav-item">Crear Orden Pedido</span>
        </a></li>
      <li><a href=home>
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Volver a Roles</span>
        </a></li>
      <li><a href=home>
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Cerrar Sesion</span>
        </a></li>
    </ul>
  </nav>

  <body>

</html><?php /**PATH C:\xampp\htdocs\PROYECTO FINAL\IQO21\resources\views/Cliente.blade.php ENDPATH**/ ?>