<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b><h1>Cadastrar Professor</h1></b>

<form action="{{ route('professores.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" required>
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>
    <a href="{{ route('professores.index') }}" class="btn btn-secondary">Voltar</a>
</form>

</div>
</body>
</x-layouts.app>
