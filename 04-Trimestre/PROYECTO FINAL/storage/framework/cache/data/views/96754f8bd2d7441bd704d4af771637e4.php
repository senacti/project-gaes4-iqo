<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
        }

        .logo-image {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
<div class="logo-container">
    <img src="<?php echo e(asset('images/logoIQO.png')); ?>" alt="Logo" class="logo-image" style="width: 300px; height: auto;">
</div>
    <div class="p-5 table-responsive">
   <h1 class="text-center p-4">Servicios </h1> 

    <?php if(session("correcto")): ?>
    <div class="alert alert-success"><?php echo e(session("correcto")); ?></div>
    <?php endif; ?>

    <?php if(session("incorrecto")): ?>
    <div class="alert alert-danger"><?php echo e(session("incorrecto")); ?></div>
    <?php endif; ?>

    <script>
    var res = function() {
        var button = event.target;
        var href = button.getAttribute('data-bs-href');
        var not = confirm("¿Estás seguro de eliminar el Servicio?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


   
<div class="btn-group" role="group">
    <a href="<?php echo e(url('/AdminServiciosTecnicos')); ?>" class="btn btn-primary">Volver a AdminServiciosTecnicos</a>
    <a href="<?php echo e(url('/TecnicoConsultarServiciosTecnicos')); ?>" class="btn btn-primary">Volver a TecnicoServiciosTecnicos</a>
    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Producto</button>
    <a href="<?php echo e(url('/pdf3')); ?>" class="btn btn-success" target="_blank">PDF</a>
</div>


         <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
                 <tr>
                     <th scope="col">ID SERVICIO</th>
                     <th scope="col">Descripcion Servicio</th>
                     <th scope="col">Precio Servicio</th>
                     <th scope="col">Id Tipo Servicio</th>
                     <th scope="col">Id Estado Servicio</th>
                     <th scope="col">Id Cliente</th>
                     <th></th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($item->ID_SERVICIO); ?></th>
                    <td><?php echo e($item->DESCRIPCION_SERV); ?></td>
                    <td><b>COP $</b><?php echo e($item->PRECIO_SERVICIO); ?></td>
                    <td><?php echo e($item->ID_TIPO_SERV); ?></td>
                    <td><?php echo e($item->ID_ESTADO_SERV); ?></td>
                    <td><?php echo e($item->ID_CLIENTE); ?></td>
        
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo e($item->ID_SERVICIO); ?>">Modificar</button>
                        <button data-bs-href="<?php echo e(route('Crud_Servicios.delete', $item->ID_SERVICIO)); ?>" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>
                    </td>
<!-- Registro DE SERVICIO -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistrarLabel">Añadir Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('Crud_Servicios.Create')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="txtCodigo" class="form-label">ID SERVICIO</label>
                        <input type="text" class="form-control" id="txtCodigo" name="txtID_SERVICIO">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombreP" class="form-label">Descripcion Servicio</label>
                        <input type="text" class="form-control" id="txtNombreP" name="txtDESCRIPCIONSERVICIO">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcionP" class="form-label">Precio Servicio</label>
                        <input type="number" class="form-control" id="txtDescripcionP" name="txtPRECIOSERVICIO">
                    </div>
                    <div class="mb-3">
                        <label for="txtReferenciaP" class="form-label">Id Tipo Servicio</label>
                        <input type="number" class="form-control" id="txtReferenciaP" name="txtIDTIPOSERVICIO">
                    </div>
                    <div class="mb-3">
                        <label for="txtValorP" class="form-label">Id Estado Servicio</label>
                        <input type="number" class="form-control" id="txtValorP" name="txtIDESTADOSERVICIO">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">Id Cliente</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtIDCLIENTE">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
         </table>
   </div>

   <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <div class="modal fade" id="modalEditar<?php echo e($item->ID_SERVICIO); ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?php echo e($item->ID_SERVICIO); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel<?php echo e($item->ID_SERVICIO); ?>">Modificar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('Crud_Servicios.update')); ?>">
                                 <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="txtCodigo" class="form-label">ID SERVICIO</label>
                            <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" name="txtID_SERVICIO" value="<?php echo e($item->ID_SERVICIO); ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="txtNombreP" class="form-label">Descripcion Servicio</label>
                            <input type="text" class="form-control" id="txtNombreP" name="txtDESCRIPCIONSERVICIO">
                        </div>
                        <div class="mb-3">
                            <label for="txtDescripcionP" class="form-label">Precio Servicio</label>
                            <input type="number" class="form-control" id="txtDescripcionP" name="txtPRECIOSERVICIO">
                        </div>
                        <div class="mb-3">
                            <label for="txtReferenciaP" class="form-label">Id Tipo Servicio</label>
                            <input type="number" class="form-control" id="txtReferenciaP" name="txtIDTIPOSERVICIO">
                        </div>
                        <div class="mb-3">
                            <label for="txtValorP" class="form-label">Id Estado Servicio</label>
                            <input type="number" class="form-control" id="txtValorP" name="txtIDESTADOSERVICIO">
                        </div>
                        <div class="mb-3">
                            <label for="txtCantidadP" class="form-label">Id Cliente</label>
                            <input type="number" class="form-control" id="txtCantidadP" name="txtIDCLIENTE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\alison\IQO21\resources\views/Servicio.blade.php ENDPATH**/ ?>