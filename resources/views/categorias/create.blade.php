<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Insira a nova categoria!</h1>
</b>
<form action="{{ route('categorias.store') }}" method="POST">

    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">Descrição:</label>
        <input type="text" name="descricao">
    </div>
<a href="{{ route('categorias.index') }}"><button type="submit" class="btn btn-success">Salvar</button></a>
</form>
</div>
</body>
</x-layouts.app>