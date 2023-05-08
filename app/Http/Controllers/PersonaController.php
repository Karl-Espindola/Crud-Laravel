<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Categoria;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        $paises = Pais::all();
        return view("listaPersonas", compact("personas"), compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();
        $categorias = Categoria::all();
        return view("crear", compact("paises", "categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona;

        $persona->per_nom = $request->nombre;
        $persona->per_ape = $request->apellido;
        $persona->per_ced = $request->cedula;
        $persona->per_ema = $request->email;
        $persona->per_pai_id = $request->pais;
        $persona->per_dir = $request->direccion;
        $persona->per_cel = $request->celular;
        $persona->per_cat_id = $request->categoria;

        $persona->save();
        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        $paises = Pais::all();
        $categorias = Categoria::all();
        return view("verPersona", compact("persona", "paises", "categorias"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
      
        $persona = Persona::find($persona->id);
        $paises = Pais::all();
        $categorias = Categoria::all();
        return view("editar", compact("persona", "paises", "categorias"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->per_nom = $request->nombre;
        $persona->per_ape = $request->apellido;
        $persona->per_ced = $request->cedula;
        $persona->per_ema = $request->email;
        $persona->per_pai_id = $request->pais;
        $persona->per_dir = $request->direccion;
        $persona->per_cel = $request->celular;
        $persona->per_cat_id = $request->categoria;

        $persona->save();
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }

    public function buscar(Request $request){
        $personas = Persona::where('per_nom', 'LIKE', "%{$request->nombre}%")->get();
        $paises = Pais::all();
        return view("listaPersonas", compact('personas', 'paises'));
    }
}
