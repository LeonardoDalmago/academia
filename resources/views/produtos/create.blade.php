<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div class="container">
<b>
    <h1>Insira um novo produto</h1>
</b>
<form action="{{ route('produtos.store') }}" method="POST">

    @csrf
    <div class="form-group">
        <label for="nome">ID da categoria:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">Descrição:</label>
        <input type="text" name="descricao">
    </div>
    <div class="form-group">
        <label for="nome">Preco:</label>
        <input type="integer" name="nome">
    </div>
    
<a href="{{ route('categorias.index') }}"><button type="submit" class="btn btn-success">Salvar</button></a>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkvVT8pmeeXUIFbC_VuSGaPmiaWPKCCd9tBg&s" alt="">
</form>
</div>
</body>
</x-layouts.app>