<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    /*
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }
*/
{
    $professores = Professor::orderByDesc('id')
            ->paginate(5)                
            ->withQueryString();         

        // Retorna a view com as avaliações compact é usado para passar variáveis para a view
        return view('professores.index', compact('professores'));

    }


    public function create()
    {
        return view('professores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professor = new Professor([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
        ]);

        $professor->save();

        return redirect()->route('professores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = Professor::findOrFail($id);
        return view('professores.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::findOrFail($id);
        return view('professores.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor::findOrFail($id);

        $professor->nome = $request->nome;
        $professor->email = $request->email;
        $professor->cpf = $request->cpf;
        $professor->telefone = $request->telefone;

        $professor->save();

        return redirect()->route('professores.index')
        ->with('success', 'Professor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();

        return redirect()->route('professores.index');
    }
}
