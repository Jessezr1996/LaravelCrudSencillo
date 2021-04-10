<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Mostrar</title>
</head>
<body>



<h1 class="h1">Lista de Personas</h1>



    <div class="container">
        <a href="{{route('crear')}}" class="btn btn-primary">Registrar Nuevo</a>

    @foreach($personas as $persona)

    <div class="row">

        <div class="col-sm">
        <h4>{{$persona->nombre}}</h4>
        </div>
        <div class="col-sm">
        <h4>{{$persona->direccion}}</h4>
        </div>
        <div class="col-sm">
        <h4>{{$persona->edad}} años</h4>
        </div>
        <div class="col-sm">
        <h4>{{$persona->profesion}}</h4>
        </div>
        <div class="col-sm">
            <a href="{{route('editar',$persona)}}" class="btn btn-primary">editar</a>

        </div>
        <div class="col-sm">

        <form action="{{route('eliminar',$persona)}}" method="post">
                @method('delete')
                <button class="btn btn-primary" type="submit">Eliminar</button>
        </form>

        </div>


    </div>
    <hr>
    @endforeach
    </div>

















</body>
</html>
