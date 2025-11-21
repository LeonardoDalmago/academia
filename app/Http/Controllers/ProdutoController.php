<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\categoria;

class ProdutoController extends Controller
{
    /**
     * LISTAR PRODUTOS
     */
    public function index()
    {
        $produtos = Produto::with('categoria')
            ->orderByDesc('id')
            ->paginate(5)
            ->withQueryString();

        return view('produtos.index', compact('produtos'));
    }

    /**
     * FORM DE CADASTRO
     */
    public function create()
    {
        // Buscar categorias para o select
        $categorias = categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * SALVAR PRODUTO NO BANCO
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
            'nome' => 'required',
            'descricao' => 'nullable',
            'preco' => 'required|numeric',
            'ativo' => 'nullable|boolean'
        ]);

        Produto::create([
            'categoria_id' => $request->categoria_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'ativo' => $request->has('ativo') ? 1 : 0,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * MOSTRAR DETALHES DO PRODUTO
     */
    public function show($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    /**
     * FORM DE EDIÇÃO
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = categoria::all();

        return view('produtos.edit', compact('produto', 'categorias'));
    }

    /**
     * ATUALIZAR PRODUTO
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
            'nome' => 'required',
            'descricao' => 'nullable',
            'preco' => 'required|numeric',
            'ativo' => 'nullable|boolean'
        ]);

        $produto = Produto::findOrFail($id);

        $produto->update([
            'categoria_id' => $request->categoria_id,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'ativo' => $request->has('ativo') ? 1 : 0,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * APAGAR PRODUTO
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
