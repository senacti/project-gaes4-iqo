<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
.cabeza{
    background-color:black;
    color: white
}


    </style>
</head>
<body>
    <h1 class="text-center">PROVEEDORES </h1> <br>
    
    <table class="table" style="text-align: center;">
        
        <thead class="cabeza">
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
            <?php $__currentLoopData = DB::select("select * from proveedores"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($item->ID_PROVEEDOR); ?></th>
                    <td><?php echo e($item->NOM_PROVEEDOR); ?></td>
                    <td><?php echo e($item->DIR_PROVEEDOR); ?></td>
                    <td><?php echo e($item->EMAIL_PROVEEDOR); ?></td>
                    <td><?php echo e($item->NIT_PROVEEDOR); ?></td>
                    <td><?php echo e($item->TEL_PROVEEDOR); ?></td>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\IQO21\resources\views/pdf2.blade.php ENDPATH**/ ?>