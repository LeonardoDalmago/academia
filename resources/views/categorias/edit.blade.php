<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Editar Categoria</h1>
</b>

<form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $categoria->nome }}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="{{ $categoria->descricao }}">
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
</form>

</div>
</body>
</x-layouts.app>
