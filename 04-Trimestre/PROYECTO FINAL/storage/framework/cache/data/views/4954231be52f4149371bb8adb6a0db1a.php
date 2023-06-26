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
            width: 300px;
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

        body {
            background: linear-gradient(to left, #3931af, #ffffff);
            background-image: url("/images/fondo1.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .register {
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>

<body>


    <nav>
        <ul>
            <li>
                <a href="<?php echo e(url ('/home')); ?>" class="logo">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
                    <span class="nav-titulo">ADMINISTRADOR & GERENTE</span>
                </a>
            </li>
            <li><a href="<?php echo e(url ('/AdminConsultarClientes')); ?>">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Consultar Clientes</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminRegistroConsultaClientes')); ?>">
                    <i class="fas fa-list-alt"></i>
                    <span class="nav-item">Registrar Clientes</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminGerenteConsultarVentas')); ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="nav-item">Consultar ventas</span>
                </a></li>
          
            <li><a href="<?php echo e(url ('/AdminRegistroTecnico')); ?>">
                    <i class="fas fa-list-alt"></i>
                    <span class="nav-item">Registrar, Consultar Tecnico</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminRegistrarProveedor')); ?>">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Registrar, Consultar Proveedor</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminRegistroProductos')); ?>">
                    <i class="fas fa-server"></i>
                    <span class="nav-item">Registrar Productos</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminConsultarProductos')); ?>">
                    <i class="fas fa-archive"></i>
                    <span class="nav-item">consultar Productos</span>
                </a></li>
            <li><a href="<?php echo e(url ('/AdminRegistroOrdenesCompra')); ?>">
                    <i class="fas fa-camera-retro"></i>
                    <span class="nav-item">Ordenes de compra</span>
                </a></li>
            <li><a href="<?php echo e(url('/AdminServiciosTecnicos')); ?>">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Servicios Tecnicos</span>
                </a></li>
            <li><a href=home>
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Volver a Roles</span>
                </a></li>
            <li><a href="<?php echo e(url('/login')); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Cerrar Sesion</span>
                </a></li>
        </ul>
    </nav>
    <div class="container register">
        <div class="row">
            <div class="col-md-4 register-left">
                <img src="<?php echo e(asset('logo/logoIQOfondo.PNG')); ?>" alt="Descripción de la imagen" style="width: 200px; height: auto;" />
                <h3>Bienvenidos</h3>
                <p>Aquí puedes comprar productos de calidad de seguridad para tu hogar, empresa, etc...</p>
                <a href="<?php echo e(url('/home')); ?>" class="btn btn-primary">
                    <i class="fa-regular fa-right-to-bracket fa-lg"></i> Iniciar Sesión
                </a>
            </div>

            <div class="col-md-8 register-right">
               
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Registro</h3>
                        <form method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Primer Nombre" id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus pattern="[^\s]+">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Segundo Nombre" id="second_name" type="text" class="form-control <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="second_name" value="<?php echo e(old('second_name')); ?>" required autocomplete="second_name" pattern="[^\s]+">
                                        <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Primer Apellido" id="last_name" type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required autocomplete="last_name" pattern="[^\s]+">
                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Segundo Apellido" id="second_last_name" type="text" class="form-control <?php $__errorArgs = ['second_last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="second_last_name" value="<?php echo e(old('second_last_name')); ?>" required autocomplete="second_last_name" pattern="[^\s]+">
                                        <?php $__errorArgs = ['second_last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input placeholder="Contraseña" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
                                            <div class="input-group-append">
                                            <button class="btn btn-outline-secondary reveal-password" type="button"><i class="fas fa-eye">Ver</i></button>

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input placeholder="Confirma Contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Cliente Natural</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span> Cliente Empresa</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Correo Electrónico" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Teléfono" type="text" minlength="10" maxlength="10" name="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('phone')); ?>" required />
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelector('.reveal-password').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var passwordConfirmInput = document.getElementById('password-confirm');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordConfirmInput.type = 'text';
            } else {
                passwordInput.type = 'password';
                passwordConfirmInput.type = 'password';
            }
        });
    </script>

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

</html><?php /**PATH C:\xampp\htdocs\alison\IQO21\resources\views/AdminRegistroConsultaClientes.blade.php ENDPATH**/ ?>