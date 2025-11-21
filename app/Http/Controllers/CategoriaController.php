<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
/*
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
*/

{
    $categorias= Categoria::orderByDesc('id')
            ->paginate(5)                
            ->withQueryString();         

        // Retorna a view com as avaliações compact é usado para passar variáveis para a view
        return view('categorias.index', compact('categorias'));

    }
    public function create()
    {
        return view('categorias.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = new categoria([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao')
        ]);
        $categorias->save();
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;

        $categoria->save();

        return redirect()->route('categorias.index')
        ->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);


        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
