<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <b><h1>Detalhes do Produto</h1></b>

        <p><strong>ID da Categoria:</strong> {{ $produto->categoria_id }}</p>
        <p><strong>Nome:</strong> {{ $produto->nome }}</p>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        <p><strong>Ativo:</strong> {{ $produto->ativo ? 'Sim' : 'Não' }}</p>

        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar</a>
    </div>

</x-layouts.app>
