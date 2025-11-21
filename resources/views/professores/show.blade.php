<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<h1>Detalhes do Professor</h1>

<p><strong>Nome:</strong> {{ $professor->nome }}</p>
<p><strong>Email:</strong> {{ $professor->email }}</p>
<p><strong>CPF:</strong> {{ $professor->cpf }}</p>
<p><strong>Telefone:</strong> {{ $professor->telefone }}</p>

<a href="{{ route('professores.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('professores.edit', $professor->id) }}" class="btn btn-primary">Editar</a>

</div>
</body>
</x-layouts.app>
