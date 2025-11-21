<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; // ✅ importação correta do Model

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    /*
    {
        $alunos = Aluno::all(); // ✅ pega todos os alunos
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    {
    $alunos= Aluno::orderByDesc('id')
            ->paginate(5)                
            ->withQueryString();         

        // Retorna a view com as avaliações compact é usado para passar variáveis para a view
        return view('alunos.index', compact('alunos'));

    }

    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aluno::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'cpf' => $request->cpf,
        'telefone' => $request->telefone,
        'status' => true,
        ]);

        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->update([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
