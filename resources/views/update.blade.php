<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>

            <div class="container">
                <h1>Formulario</h1>



               <form action="{{route('modificar',$persona)}}" method="post">
                @method('put')
                    @csrf

                    <div class="row">
                        <div class="col">
                        <label for="nombre">Nombre:</label>
                        <input class="form-control" value="{{$persona->nombre}}" type="text" name="nombre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="edad">Edad:</label>
                        <input class="form-control" value="{{$persona->edad}}" type="number" name="edad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="direccion">direccion:</label>
                        <input class="form-control" value="{{$persona->direccion}}" type="text" name="direccion">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="profesion">Profesion:</label>
                        <input class="form-control" value="{{$persona->profesion}}" type="text" name="profesion">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Guardar</button>

               </form>

            </div>

</body>
</html>
