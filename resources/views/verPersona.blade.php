@extends('layouts.plantillaInfo')

@section("menu")
    <ul class="lista">
        <li><a href="{{route('home')}}" class="link">Inicio</a></li>
        <li><a href="{{route('personas.index')}}" class="link">Lista</a></li>
        <li><a href="{{route('personas.create')}}" class="link">Registrar</a></li>
        <li><a href="" class="link">Categorias</a></li>
    </ul>
@endsection

@section('subtitulo')
    <p class="subtitulo">Detalles de Persona</p>
@endsection

@section('infopersona')
    <p>
        <span class="tipo">NOMBRE: </span>{{$persona->per_nom}}
    </p>
    <p>
        <span class="tipo">APELLIDO: </span>{{$persona->per_ape}}
    </p>
    <p>
        <span class="tipo">CEDULA: </span>{{$persona->per_ced}}
    </p>
    <p>
        <span class="tipo">EMAIL: </span>{{$persona->per_ema}}
    </p>
    <p>
        <span class="tipo">PAIS: </span>
        @foreach($paises as $pais)
            @php
                if($pais->id == $persona->per_pai_id){
                    echo $pais->pai_nom;
                }
            @endphp
        @endforeach
    </p>
    <p>
        <span class="tipo">DIRECCION: </span>{{$persona->per_dir}}
    </p>
    <p>
        <span class="tipo">CELULAR: </span>{{$persona->per_cel}}
    </p>
    <p>
        <span class="tipo">CATEGORIA: </span>
        @foreach($categorias as $categoria)
            @php
                if($categoria->id == $persona->per_cat_id){
                    echo $categoria->cat_nom;
                }
            @endphp
        @endforeach
    </p>
@endsection

@section('btnVolver')
    <br>
    <button class="btn btn-azul"><a href="{{route('personas.index')}}" class="btn-link">volver</a></button>
@endsection