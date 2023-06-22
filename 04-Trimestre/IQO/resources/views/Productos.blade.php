<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 table-responsive">
   <h1 class="text-center p-4">Productos ingresados en el Inventario</h1> 

    @if(session("correcto"))
    <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if(session("incorrecto"))
    <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif

    <script>
    var res = function() {
        var button = event.target;
        var href = button.getAttribute('data-bs-href');
        var not = confirm("¿Estás seguro de eliminar el Producto?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


   
   <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Producto</button>
   <a href="{{url('/pdf')}}" class="btn btn-success" target="blank">PDF</a>


         <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
                 <tr>
                     <th scope="col">ID PRODUCTO</th>
                     <th scope="col">Nombre del Producto</th>
                     <th scope="col">Descripcion del Producto</th>
                     <th scope="col">Referencia Producto</th>
                     <th scope="col">Valor</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">ID MARCA</th>
                     <th></th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                <tr>
                    <th>{{$item->ID_PRODUCTO}}</th>
                    <td>{{$item->NOMBRE_PRODUCTO}}</td>
                    <td>{{$item->DESCRIPCION_PRODUCTO}}</td>
                    <td>{{$item->REFERENCIA_PRODUCTO}}</td>
                    <td><b>COP $</b>{{$item->VALOR_PRODUCTO}}</td>
                    <td>{{$item->CANTIDAD_PRODUCTO}}</td>
                    <td>{{$item->ID_MARCA}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->ID_PRODUCTO}}">Modificar</button>
                        <button data-bs-href="{{ route('Crud_Productos.delete', $item->ID_PRODUCTO) }}" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>
                    </td>
<!-- Registro deProducto -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistrarLabel">Añadir Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('Crud_Productos.Create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="txtCodigo" class="form-label">ID PRODUCTO</label>
                        <input type="text" class="form-control" id="txtCodigo" name="txtID_PRODUCTO">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombreP" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="txtNombreP" name="txtNOMBRE">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcionP" class="form-label">Descripción del Producto</label>
                        <input type="text" class="form-control" id="txtDescripcionP" name="txtDescripcionP">
                    </div>
                    <div class="mb-3">
                        <label for="txtReferenciaP" class="form-label">Referencia del Producto</label>
                        <input type="text" class="form-control" id="txtReferenciaP" name="txtReferenciaP">
                    </div>
                    <div class="mb-3">
                        <label for="txtValorP" class="form-label">Valor del Producto</label>
                        <input type="number" class="form-control" id="txtValorP" name="txtValorP">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">Cantidad Producto</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtCantidadP">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">ID_MARCA</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtIdMarca">
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
                @endforeach
           </tbody>
         </table>
   </div>

   @foreach ($datos as $item)
   {{-- modal editar --}}
    <div class="modal fade" id="modalEditar{{$item->ID_PRODUCTO}}" tabindex="-1" aria-labelledby="modalEditarLabel{{$item->ID_PRODUCTO}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel{{$item->ID_PRODUCTO}}">Modificar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('Crud_Productos.update') }}">
                                 @csrf

                        <div class="mb-3">
                            <label for="txtCodigo" class="form-label">ID PRODUCTO</label>
                            <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" name="txtID_PRODUCTO" value="{{$item->ID_PRODUCTO}}" readonly>
                        </div>
                        <div class="mb-3">
                        <label for="txtNombreP" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="txtNombreP" name="txtNOMBRE">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcionP" class="form-label">Descripción del Producto</label>
                        <input type="text" class="form-control" id="txtDescripcionP" name="txtDescripcionP">
                    </div>
                    <div class="mb-3">
                        <label for="txtReferenciaP" class="form-label">Referencia del Producto</label>
                        <input type="text" class="form-control" id="txtReferenciaP" name="txtReferenciaP">
                    </div>
                    <div class="mb-3">
                        <label for="txtValorP" class="form-label">Valor del Producto</label>
                        <input type="number" class="form-control" id="txtValorP" name="txtValorP">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">Cantidad Producto</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtCantidadP">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadP" class="form-label">ID MARCA</label>
                        <input type="number" class="form-control" id="txtCantidadP" name="txtIdMarca">
                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>