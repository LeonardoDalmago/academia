<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <b><h1>Insira um novo produto</h1></b>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="categoria_id">ID da categoria:</label>
                <input type="text" name="categoria_id">
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao">
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco">
            </div>

            {{-- Campo ATIVO que existe no controller --}}
            <div class="form-group">
                <label for="ativo">Ativo:</label>
                <select name="ativo">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</x-layouts.app>
