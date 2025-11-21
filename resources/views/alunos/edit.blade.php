<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <h1>Editar Aluno</h1>

        <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" value="{{ $aluno->nome }}" required>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" value="{{ $aluno->email }}" required>
            </div>

            <div class="form-group">
                <label>CPF:</label>
                <input type="text" name="cpf" value="{{ $aluno->cpf }}" required>
            </div>

            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" name="telefone" value="{{ $aluno->telefone }}" required>
            </div>

            <div class="form-group">
                <label>Status:</label>
                <select name="status">
                    <option value="1" {{ $aluno->status ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$aluno->status ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>

        </form>
    </div>

</x-layouts.app>
