<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Marca::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
            'nombre' => 'required|string|max:100|unique:marcas,nombre',
        ]);

        $marca = Marca::create($validated);

        return response()->json([
            'message' => 'Marca creada exitosamente',
            'marca' => $marca
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $marca = Marca::find($id);

        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }

        return response()->json($marca);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         $marca = Marca::find($id);

        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'required|string|max:100|unique:marcas,nombre,' . $id,
        ]);

        $marca->update($validated);

        return response()->json([
            'message' => 'Marca actualizada exitosamente',
            'marca' => $marca
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $marca = Marca::find($id);

        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }

        $marca->delete();

        return response()->json(['message' => 'Marca eliminada exitosamente']);
    }
}
