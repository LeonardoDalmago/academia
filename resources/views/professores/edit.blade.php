<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b><h1>Editar Professor</h1></b>

<form action="{{ route('professores.update', $professor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $professor->nome }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $professor->email }}">
    </div>

    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" value="{{ $professor->cpf }}">
    </div>

    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" value="{{ $professor->telefone }}">
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="{{ route('professores.index') }}" class="btn btn-secondary">Voltar</a>
</form>

</div>
</body>
</x-layouts.app>
