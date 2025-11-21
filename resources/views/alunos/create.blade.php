<x-layouts.app>
<link rel="stylesheet" href="{{ asset('css/form.css') }}">

<div class="container">
    <h1>Cadastrar Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>CPF:</label>
            <input type="text" name="cpf" required>
        </div>

        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="telefone" required>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <select name="status">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>

</x-layouts.app>
