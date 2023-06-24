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
    <h1 class="text-center">PRODUCTOS DISPONIBLES</h1> <br>
    
    <table class="table" style="text-align: center;">
        
        <thead class="cabeza">
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
            @foreach (DB::select("select * from producto") as $item)
            <tr>
                <th>{{$item->ID_PRODUCTO}}</th>
                <td>{{$item->NOMBRE_PRODUCTO}}</td>
                <td>{{$item->DESCRIPCION_PRODUCTO}}</td>
                <td>{{$item->REFERENCIA_PRODUCTO}}</td>
                <td><b>COP $</b>{{$item->VALOR_PRODUCTO}}</td>
                <td>{{$item->CANTIDAD_PRODUCTO}}</td>
                <td>{{$item->ID_MARCA}}</td>

            @endforeach
       </tbody>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>