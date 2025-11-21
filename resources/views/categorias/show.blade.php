<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Detalhes da Categoria</h1>
</b>

<div class="form-group">
    <label><strong>Nome:</strong></label>
    <p>{{ $categoria->nome }}</p>
</div>

<div class="form-group">
    <label><strong>Descrição:</strong></label>
    <p>{{ $categoria->descricao }}</p>
</div>

<a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>

</div>
</body>
</x-layouts.app>
