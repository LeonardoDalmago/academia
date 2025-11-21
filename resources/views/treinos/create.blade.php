<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Insira a nova categoria!</h1>
</b>
<form action="{{ route('treinos.store') }}" method="POST">

    @csrf
    <div class="form-group">
        <label for="nome">Exercicio:</label>
        <input type="text" name="exercicio">
    </div>
    <div class="form-group">
        <label for="nome">Séries:</label>
        <input type="text" name="series">
    </div>
<a href="{{ route('treinos.index') }}"><button type="submit" class="btn btn-success">Salvar</button></a>
</form>
</div>
</body>
</x-layouts.app>