<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

<body>
<div class="container">
<b>
    <h1>Detalhes do Aluno</h1>
</b>

<div class="form-group">
    <label><strong>Nome:</strong></label>
    <p>{{ $aluno->nome }}</p>
</div>

<div class="form-group">
    <label><strong>Email:</strong></label>
    <p>{{ $aluno->email }}</p>
</div>

<div class="form-group">
    <label><strong>CPF:</strong></label>
    <p>{{ $aluno->cpf }}</p>
</div>

<div class="form-group">
    <label><strong>Telefone:</strong></label>
    <p>{{ $aluno->telefone }}</p>
</div>

<div class="form-group">
    <label><strong>Status:</strong></label>
    <p>{{ $aluno->status }}</p>
</div>

<a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-primary">Editar</a>

</div>
</body>
</x-layouts.app>
