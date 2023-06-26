<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 table-responsive">
   <h1 class="text-center p-4">Proveedores</h1> 

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
        var not = confirm("¿Estás seguro de eliminar el Proveedor?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


   
   <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Proveedor</button>
   <a href="<?php echo e(url('/pdf2')); ?>" class="btn btn-success" target="blank">PDF</a>


         <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
                 <tr>
                     <th scope="col">ID PROVEEDOR</th>
                     <th scope="col">Nombre del Proveedor</th>
                     <th scope="col">Direccion del Proveedor</th>
                     <th scope="col">Email Proveedor</th>
                     <th scope="col">Nit Proveedor</th>
                     <th scope="col">Tel Proveedor</th>
                     <th></th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($item->ID_PROVEEDOR); ?></th>
                    <td><?php echo e($item->NOM_PROVEEDOR); ?></td>
                    <td><?php echo e($item->DIR_PROVEEDOR); ?></td>
                    <td><?php echo e($item->EMAIL_PROVEEDOR); ?></td>
                    <td><?php echo e($item->NIT_PROVEEDOR); ?></td>
                    <td><?php echo e($item->TEL_PROVEEDOR); ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo e($item->ID_PROVEEDOR); ?>">Modificar</button>
                        <button data-bs-href="<?php echo e(route('Crud_Proveedor.delete', $item->ID_PROVEEDOR)); ?>" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>
                    </td>
<!-- Registro de Proveedor -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistrarLabel">Añadir Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('Crud_Proveedor.Create')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="txtCodigo" class="form-label">ID PROVEEDOR</label>
                        <input type="text" class="form-control" id="txtCodigo" name="txtID_PROVEEDOR">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombreP" class="form-label">Nombre del Proveedor</label>
                        <input type="text" class="form-control" id="txtNombreP" name="txtNOMBREPROVEEDOR">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcionP" class="form-label">Direccion Proveedor</label>
                        <input type="text" class="form-control" id="txtDescripcionP" name="txtDIRECCIONPROVEEDOR">
                    </div>
                    <div class="mb-3">
                        <label for="txtReferenciaP" class="form-label">Email Proveedor</label>
                        <input type="text" class="form-control" id="txtReferenciaP" name="txtEMAILPROVEEDOR">
                    </div>
                    <div class="mb-3">
                        <label for="txtValorP" class="form-label">Nit_Proveedor</label>
                        <input type="number" class="form-control" id="txtValorP" name="txtNITPROVEEDOR">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">Tel Proveedor</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtTELPROVEEDOR">
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
   
    <div class="modal fade" id="modalEditar<?php echo e($item->ID_PROVEEDOR); ?>" tabindex="-1" aria-labelledby="modalEditarLabel<?php echo e($item->ID_PROVEEDOR); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel<?php echo e($item->ID_PROVEEDOR); ?>">Modificar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('Crud_Proveedor.update')); ?>">
                                 <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="txtCodigo" class="form-label">ID PROVEEDOR</label>
                            <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" name="txtID_PROVEEDOR" value="<?php echo e($item->ID_PROVEEDOR); ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="txtNombreP" class="form-label">Nombre del Proveedor</label>
                            <input type="text" class="form-control" id="txtNombreP" name="txtNOMBREPROVEEDOR">
                        </div>
                        <div class="mb-3">
                            <label for="txtDescripcionP" class="form-label">Direccion Proveedor</label>
                            <input type="text" class="form-control" id="txtDescripcionP" name="txtDIRECCIONPROVEEDOR">
                        </div>
                        <div class="mb-3">
                            <label for="txtReferenciaP" class="form-label">Email Proveedor</label>
                            <input type="text" class="form-control" id="txtReferenciaP" name="txtEMAILPROVEEDOR">
                        </div>
                        <div class="mb-3">
                            <label for="txtValorP" class="form-label">Nit_Proveedor</label>
                            <input type="number" class="form-control" id="txtValorP" name="txtNITPROVEEDOR">
                        </div>
                        <div class="mb-3">
                            <label for="txtCantidadP" class="form-label">Tel Proveedor</label>
                            <input type="number" class="form-control" id="txtCantidadP" name="txtTELPROVEEDOR">
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
</html><?php /**PATH C:\xampp\htdocs\IQO21\resources\views/Proveedor.blade.php ENDPATH**/ ?>