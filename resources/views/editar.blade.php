@extends('layouts.plantillaInfo')

@section('subtitulo')
    <p class="subtitulo">Editar Persona</p>
@endsection

@section("menu")
    <ul class="lista">
        <li><a href="{{route('home')}}" class="link">Inicio</a></li>
        <li><a href="{{route('personas.index')}}" class="link">Lista</a></li>
        <li><a href="{{route('personas.create')}}" class="link">Registrar</a></li>
        <li><a href="" class="link">Categorias</a></li>
    </ul>
@endsection

@section ("infopersona")
    <form action="{{route('personas.update', $persona)}}" method="POST" class="info-persona">
        @csrf
        @method('put')
        <div class="group-from">
            <label for="">NOMBRE</label>
            <input type="text" value="{{$persona->per_nom}}" name="nombre" class="input">
        </div>
        <div class="group-from">
            <label for="">APELLIDO</label>
            <input type="text" value="{{$persona->per_ape}}" name="apellido" class="input">
        </div>
        <div class="group-from">
            <label for="">CEDULA</label>
            <input type="text" value="{{$persona->per_ced}}" name="cedula" class="input">
        </div>
        <div class="group-from">
            <label for="">EMAIL</label>
            <input type="text" value="{{$persona->per_ema}}" name="email" class="input">
        </div>
        <div class="group-from">
            <label for="">PAIS</label>
            <select name="pais" id="" class="lista-desplegable">
                @foreach($paises as $pais)
                    @php
                        ($persona->per_pai_id == $pais->id) ? $selected = "selected" : $selected = "";
                    @endphp
                    <option value="{{$pais->id}}" {{$selected}}>{{$pais->pai_nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="group-from">
            <label for="">DIRECCION</label>
            <input type="text" value="{{$persona->per_dir}}" name="direccion" class="input">
        </div>
        <div class="group-from">
            <label for="">CELULAR</label>
            <input type="text" value="{{$persona->per_cel}}" name="celular" class="input">
        </div>
        <div class="group-from">
            <label for="">CATERGORIA</label>
            <select name="categoria" id="" class="lista-desplegable">
                @foreach($categorias as $categoria)
                    @php
                        ($persona->per_cat_id == $categoria->id) ? $selected = "selected" : $selected = "";
                    @endphp
                    <option value="{{$categoria->id}}" {{$selected}}>{{$categoria->cat_nom}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-actualizar">actualizar</button>
    </from>
@endsection 