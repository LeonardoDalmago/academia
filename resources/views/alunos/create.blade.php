<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Insira os dados do aluno!</h1>
</b>
<form action="{{ route('categorias.store') }}" method="POST">

    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">Email:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">CPF:</label>
        <input type="text" name="descricao">
    </div>
    <div class="form-group">
        <label for="nome">Telefone:</label>
        <input type="integer" name="nome">
    </div>
    <div class="form-check">
         <label for="statusSelect">Status:</label>
    <select class="form-control" name="status" id="statusSelect">
        <option value="1">Ativo (Sim)</option>
        <option value="0">Inativo (Não)</option>
    </select>
<a href="{{ route('alunos.index') }}"><button type="submit" class="btn btn-success">Salvar</button></a>
</form>
</div>
</body>
</x-layouts.app>