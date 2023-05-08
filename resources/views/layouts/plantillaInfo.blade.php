<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Detalles</title>
    <link rel="stylesheet" href="{{asset('css/detalles.css')}}">
</head>
<body>
    <section class="contenedor">
        <p class="titulo">Laravel 10v CRUD__Personas</p>
        <div>
            @yield ("menu")
        </div>
        <div>
            @yield ("subtitulo")
        </div>
        <div class="info-persona">
            @yield ("infopersona")
        </div>
        <div>
            @yield ("btnVolver")
        </div>
    </section>
</body>
</html>