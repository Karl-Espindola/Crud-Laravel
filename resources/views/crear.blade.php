@extends("layouts.plantillaInfo")

@section('subtitulo')
    <p class="subtitulo">Registrar Persona</p>
@endsection

@section("menu")
    <ul class="lista">
        <li><a href="{{route('home')}}" class="link">Inicio</a></li>
        <li><a href="{{route('personas.index')}}" class="link">Lista</a></li>
        <li><a href="{{route('personas.create')}}" class="link color-link">Registrar</a></li>
        <li><a href="" class="link">Categorias</a></li>
    </ul>
@endsection

@section ("infopersona")
    <form action="{{route('personas.store')}}" method="POST" class="info-persona">
        @csrf
        <div class="group-from">
            <label for="">NOMBRE</label>
            <input type="text" value="" name="nombre" class="input">
        </div>
        <div class="group-from">
            <label for="">APELLIDO</label>
            <input type="text" value="" name="apellido" class="input">
        </div>
        <div class="group-from">
            <label for="">CEDULA</label>
            <input type="text" value="" name="cedula" class="input">
        </div>
        <div class="group-from">
            <label for="">EMAIL</label>
            <input type="text" value="" name="email" class="input">
        </div>
        <div class="group-from">
            <label for="">PAIS</label>
            <select name="pais" id="" class="lista-desplegable">
                @foreach($paises as $pais)
                    <option value="{{$pais->id}}">{{$pais->pai_nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="group-from">
            <label for="">DIRECCION</label>
            <input type="text" value="" name="direccion" class="input">
        </div>
        <div class="group-from">
            <label for="">CELULAR</label>
            <input type="text" value="" name="celular" class="input">
        </div>
        <div class="group-from">
            <label for="">CATERGORIA</label>
            <select name="categoria" id="" class="lista-desplegable">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->cat_nom}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-actualizar">registrar</button>
    </from>
@endsection 