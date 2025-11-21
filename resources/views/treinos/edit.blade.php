<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Editar Treino</h1>
</b>

<form action="{{ route('treinos.update', $treino->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="exercicio">Exercício:</label>
        <input type="text" name="exercicio" value="{{ $treino->exercicio }}">
    </div>

    <div class="form-group">
        <label for="series">Séries:</label>
        <input type="text" name="series" value="{{ $treino->series }}">
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="{{ route('treinos.index') }}" class="btn btn-secondary">Voltar</a>
</form>

</div>
</body>
</x-layouts.app>
