<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                return response()->json(Producto::with('marca')->get());

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
            'nombre' => 'required|string|max:150',
            'precio' => 'required|numeric|min:0',
            'marca_id' => 'required|exists:marcas,id',
        ]);

        $producto = Producto::create($validated);

        return response()->json([
            'message' => 'Producto creado exitosamente',
            'producto' => $producto
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $id)
    {
        $producto = Producto::with('marca')->find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
