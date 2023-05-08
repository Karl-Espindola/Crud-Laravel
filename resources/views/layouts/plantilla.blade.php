<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section class="contenedor">
        <p class="titulo">Laravel 10v CRUD__Personas</p>
        <div>
            @yield("menu")
        </div>
        <div>
            @yield ("boton")
        </div>
        <br>
        <div>
            @yield ("buscador")
        </div>
        <br>
        <div>
            @yield ("tabla")
            
        </div>
        <br>
        <div>
            @yield ("formulario")
        </div>
    </section>
</body>
</html>