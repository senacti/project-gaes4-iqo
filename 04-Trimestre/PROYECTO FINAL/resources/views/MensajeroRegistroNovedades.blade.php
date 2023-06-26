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
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="text-center" style="margin-top: 20px;">
                <img src="{{ asset('images/logoIQO.png') }}" alt="Logo" class="logo-img">
            </div>
        </div>
    </div>

    <nav>
        <ul>
            <li>
                <a href="{{url ('/home')}}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="nav-titulo">MENSAJERO</span>
                </a>
            </li>
            <li><a href="{{ url ('/MensajeroRegistroNovedades')}}">
                    <i class="fas fa-archive"></i>
                    <span class="nav-item">Registrar Novedades Pedido</span>
                </a></li>
            <li><a href="{{ url ('/MensajeroRegistroOrdenesCompra')}}">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="nav-item">C.Ordenes de Compra</span>
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
    <div class="container-sm mb-4">
        <div class="card">
            <div class="card-body">
                <h1 class="titulo">Registrar Novedades de Pedido</h1>
                <form class="formulario">
                    <h4>Informacion Proveedor</h4>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="estado">Estado Novedad Pedido</label>
                            <div class="maxl">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" checked>
                                    <span> Completado</span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" checked>
                                    <span> Pendiente</span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" checked>
                                    <span> Enviado</span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" checked>
                                    <span> Recogido</span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" checked>
                                    <span> En Proceso</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="nombreem">Nombre Empleado</label>
                            <input type="text" class="form-control" id="nombreem" placeholder="Ingrese el nombre del Empleado" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="id">id Cargo</label>
                            <input type="text" class="form-control" id="id" placeholder="Ingrese Id Cargo" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Direccion" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="telefono">Telefono</label>
                            <input placeholder="Teléfono" type="text" minlength="10" maxlength="10" name="phone" class="form-control" value="telefono" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="nombrepro">Nombre Proveedor</label>
                            <input type="text" class="form-control" id="nombrepro" placeholder="Ingrese el nombre del Proveedor" required>
                        </div>
                        <div class="form-group">
                            <label for="novedades">Informacion Novedad Pedido</label>
                            <textarea class="form-control" id="novedades" rows="5" placeholder="Ingrese las novedades aquí" required></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Novedad</button>
                </form>
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/xxxxxxxxxx.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Obtén el elemento del navbar y el contenido
        var navbar = document.querySelector('.navbar');
        var content = document.querySelector('#content');

        // Obtiene la altura del navbar
        var navbarHeight = navbar.offsetHeight;

        // Ajusta el margen superior del contenido al abrir o cerrar el navbar
        function adjustContentMargin() {
            var isOpen = navbar.classList.contains('show');
            if (isOpen) {
                content.style.marginTop = navbarHeight + 'px';
            } else {
                content.style.marginTop = '0';
            }
        }

        // Llama a la función de ajuste inicial
        adjustContentMargin();

        // Agrega un evento al cambio de estado del navbar
        navbar.addEventListener('show.bs.collapse', adjustContentMargin);
        navbar.addEventListener('hide.bs.collapse', adjustContentMargin);
    </script>
    <script>
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('nav').toggleClass('open');
                $('.content').toggleClass('open');
            });
        });
    </script>

    <body>

</html>