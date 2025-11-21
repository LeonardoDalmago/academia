<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <b><h1>Editar Produto</h1></b>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="categoria_id">ID da categoria:</label>
                <input type="text" name="categoria_id" value="{{ $produto->categoria_id }}">
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{ $produto->nome }}">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" value="{{ $produto->descricao }}">
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}">
            </div>

            {{-- Campo ATIVO para manter consistência com o CREATE e o controller --}}
            <div class="form-group">
                <label for="ativo">Ativo:</label>
                <select name="ativo">
                    <option value="1" {{ $produto->ativo == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ $produto->ativo == 0 ? 'selected' : '' }}>Não</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</x-layouts.app>
