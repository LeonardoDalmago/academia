<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treino;

class TreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    /*
    {
        $treinos = Treino::all();
        return view('treinos.index', compact('treinos'));
    }
        */
{
    $treinos = Treino::orderByDesc('id')
            ->paginate(5)                
            ->withQueryString();         

        // Retorna a view com as avaliações compact é usado para passar variáveis para a view
        return view('treinos.index', compact('treinos'));

    }
    public function create()
    {
        return view('treinos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $treino = new Treino([
            'exercicio' => $request->input('exercicio'),
            'series' => $request->input('series')
        ]);

        $treino->save();

        return redirect()->route('treinos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treino = Treino::findOrFail($id);
        return view('treinos.show', compact('treino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $treino = Treino::findOrFail($id);
        return view('treinos.edit', compact('treino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $treino = Treino::findOrFail($id);

        $treino->exercicio = $request->exercicio;
        $treino->series = $request->series;

        $treino->save();

        return redirect()->route('treinos.index')
        ->with('success', 'Treino atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treino = Treino::findOrFail($id);
        $treino->delete();

        return redirect()->route('treinos.index');
    }
}
