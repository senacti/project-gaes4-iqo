<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IQO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .titulo {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .form-inline .form-group {
            margin-right: 10px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }
    </style>
</head>

<body>


    <nav>
        <ul>
            <li>
                <a href="{{url ('/home')}}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="nav-titulo">ADMINISTRADOR</span>
                </a>
            </li>
            <li><a href="{{ url ('/AdminConsultarClientes')}}">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Consultar Clientes</span>
                </a></li>
            <li><a href="{{ url ('/AdminRegistroConsultaClientes')}}">
                    <i class="fas fa-list-alt"></i>
                    <span class="nav-item">Registrar Clientes</span>
                </a></li>
            <li><a href="{{ url ('/AdminGerenteConsultarVentas')}}">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="nav-item">Consultar ventas</span>
                </a></li>

            <li><a href="{{ url ('/AdminRegistroTecnico')}}">
                    <i class="fas fa-list-alt"></i>
                    <span class="nav-item">Registrar, Consultar Tecnico</span>
                </a></li>
            <li><a href="{{ url ('/AdminRegistrarProveedor')}}">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Registrar, Consultar Proveedor</span>
                </a></li>
            <li><a href="{{ url ('/AdminRegistroProductos')}}">
                    <i class="fas fa-server"></i>
                    <span class="nav-item">Registrar Productos</span>
                </a></li>
            <li><a href="{{ url ('/AdminConsultarProductos')}}">
                    <i class="fas fa-archive"></i>
                    <span class="nav-item">consultar Productos</span>
                </a></li>
            <li><a href="{{ url ('/AdminRegistroOrdenesCompra')}}">
                    <i class="fas fa-camera-retro"></i>
                    <span class="nav-item">Ordenes de compra</span>
                </a></li>
            <li><a href="{{ url('/AdminServiciosTecnicos')}}">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Servicios Tecnicos</span>
                </a></li>
            <li><a href=home>
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Volver a Roles</span>
                </a></li>
            <li><a href="{{ url('/login')}}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Cerrar Sesion</span>
                </a></li>
        </ul>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="text-center" style="margin-top: 20px;">
                <img src="{{ asset('images/logoIQO.png') }}" alt="Logo" class="logo-img">
            </div>
        </div>
    </div>

    <div class="container-sm">
        <div class="card mb-4">
            <div class="card-body">
                <h1 class="titulo">Servicios Tecnicos</h1>
                <form class="formulario">
                    <div>
                        <h3 class="titulo">Agendar Servicio Tecnico</h1>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="id">Id Servicio</label>
                            <input type="text" class="form-control" id="id" placeholder="Id Servicio" required>
                        </div>
                        <div class="form-group">
                            <label for="serial">Categoria Servicio</label>
                            <input type="text" class="form-control" id="serial" placeholder="Categoria Servcicio" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Descripcion Servicio</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Descripcion Servicio" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre Servicio</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre Servicio" required>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio Servicio</label>
                            <input type="float" class="form-control" id="nombre" placeholder="Precio Servicio" required>
                        </div>
                        <div class="form-group">
                            <label for="precio">Estado Servicio</label>
                            <div class="maxl">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" checked>
                                    <span> Activo</span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female">
                                    <span> Inactivo</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="titulo">Informacion del Cliente</h1>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="nombre">Nombre Cliente</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre Cliente" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido Cliente</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido Cliente" required>
                        </div>
                        <div class="form-group">
                            <label for="cedula">Cedula o NIT</label>
                            <input type="text" class="form-control" id="cedula" placeholder="Digite Cedula o NIT" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion Servicio</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Direccion Servicio" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control" id="telefono" placeholder="Precio Servicio" pattern="[0-9]{10}" title="Numero Contacto" required>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Agendar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-sm">
        <div class="card mb-4">
        <div class="card-body">
    <div class="container">
        <h1>Consulta de Servicios</h1>
        <p>Aquí puedes consultar los Servicios de la Empresa.</p>
        <a href=Servicio class="btn btn-primary">Consultar Servicios</a>
    </div>
</div>


        </div>
    </div>
    </div>

    <div class="container-sm">
        <div class="card mb-4">
            <div class="card-body">
                <h1 class="titulo">Actualizar Estado de Productos</h1>
                <form class="formulario">
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="referencia">Referencia Producto:</label>
                            <input type="text" class="form-control" id="referencia" placeholder="Ingrese la referencia del producto" required>
                        </div>
                        <div class="form-group">
                            <label for="serial">Serial Producto:</label>
                            <input type="text" class="form-control" id="serial" placeholder="Ingrese el serial del producto" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre Producto:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" required>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="activo" value="activo" required>
                        <label class="form-check-label" for="activo">
                            Activo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="inactivo" value="inactivo" required>
                        <label class="form-check-label" for="inactivo">
                            Inactivo
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</body>

</html>