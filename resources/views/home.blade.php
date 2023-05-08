<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Home</title>
    <style>
        *{
            margin:0;
            padding:0;
            font-family:sans-serif;
            box-sizing:border-box;
        }
        .lista{
            list-style:none;
            display:flex;
            justify-content:center;
            gap: 30px;
            margin:30px auto;
        }
        .link{
            text-decoration:none;
            color: gray;
            font-size:20px;
        }
        .color-link{
            color:green;
            font-weight:bold;
        }
        h1{
            margin-top:30px;
            text-align:center;
        }
    </style>
</head>
<body>
    <section>
        <h1>CRUD Laravel 10v</h1>
        <ul class="lista">
            <li><a href="{{route('home')}}" class="link color-link">Inicio</a></li>
            <li><a href="{{route('personas.index')}}" class="link">Lista</a></li>
            <li><a href="{{route('personas.create')}}" class="link">Registrar</a></li>
            <li><a href="{{route('personas.create')}}" class="link">Categoria</a></li>
        </ul>
    </section>
</body>
</html>
