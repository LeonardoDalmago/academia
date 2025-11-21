<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Detalhes do Treino</h1>
</b>

<div class="form-group">
    <label><strong>Exercício:</strong></label>
    <p>{{ $treino->exercicio }}</p>
</div>

<div class="form-group">
    <label><strong>Séries:</strong></label>
    <p>{{ $treino->series }}</p>
</div>

<a href="{{ route('treinos.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('treinos.edit', $treino->id) }}" class="btn btn-primary">Editar</a>

</div>
</body>
</x-layouts.app>
