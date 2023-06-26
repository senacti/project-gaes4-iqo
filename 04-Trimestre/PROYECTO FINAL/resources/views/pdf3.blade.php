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
    <h1 class="text-center">SERVICIOS</h1> <br>
    
    <table class="table" style="text-align: center;">
        
        <thead class="cabeza">
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
            @foreach (DB::select("select * from servicio") as $item)
            <tr>
                <th>{{$item->ID_SERVICIO}}</th>
                    <td>{{$item->DESCRIPCION_SERV}}</td>
                    <td><b>COP $</b>{{$item->PRECIO_SERVICIO}}</td>
                    <td>{{$item->ID_TIPO_SERV}}</td>
                    <td>{{$item->ID_ESTADO_SERV}}</td>
                    <td>{{$item->ID_CLIENTE}}</td>

            @endforeach
       </tbody>
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>