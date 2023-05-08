@extends ("layouts.plantilla")

@section ("titulo")
    <h2 class="titulo">Lista de personas</h2>
@endsection

@section("menu")
    <ul class="lista">
        <li><a href="{{route('home')}}" class="link">Inicio</a></li>
        <li><a href="{{route('personas.index')}}" class="link color-link">Lista</a></li>
        <li><a href="{{route('personas.create')}}" class="link">Registrar</a></li>
        <li><a href="" class="link">Categorias</a></li>
    </ul>
@endsection

@section ("boton")
    <div class="btn btn-verde">
        <a href="{{route('personas.create')}}" class="btn-link">Registrar Nuevo</a>
    </div>
@endsection

@section ("buscador")
    <form action="{{route('personas.buscar')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre..." class="input">
        <button class="btn" type="submit">Buscar</button>
    </form>
@endsection

@section ("tabla")
    <table>
        <tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>CEDULA</th><th>EMAIL</th><th>PAIS</th><th>ACCIONES</th></tr>
    @foreach($personas as $persona)
        <tr>
            <td>{{$persona->id}}</td>
            <td><a href="{{route('personas.show', $persona)}}">{{$persona->per_nom}}</a></td>
            <td>{{$persona->per_ape}}</td>
            <td>{{$persona->per_ced}}</td>
            <td>{{$persona->per_ema}}</td>
            <td>
                @foreach($paises as $pais)
                    @php
                    if($pais->id == $persona->per_pai_id){
                        echo $pais->pai_nom;
                    }
                    @endphp
                @endforeach
            </td>
            <td class="acciones">
                <div class="btn btn-azul">
                    <a href="{{route('personas.edit', $persona)}}" class="btn-link">editar</a>
                </div>
                <form action="{{route('personas.destroy', $persona)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-rojo" type="submit">
                        <span class="btn-link">borrar</span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
