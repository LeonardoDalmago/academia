<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <div class="container mt-4">

        <h1>Lista de Produtos</h1>
        <br>

        <a href="{{ url('/produtos/create') }}" class="btn btn-primary mb-3">
            + Novo produto
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->categoria->nome ?? '—' }}</td>
                        <td>{{ $produto->nome }}</td>

                        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>

                        <td>{{ $produto->ativo ? 'Sim' : 'Não' }}</td>

                        <td>
                            <a href="{{ route('produtos.show', $produto) }}" class="link blue">Ver</a>

                            <a href="{{ route('produtos.edit', $produto) }}" class="link yellow">Editar</a>

                            
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline form-excluir">
                                @csrf
                                @method('DELETE')

                                <a
                                    href="#"
                                    class="link red btn-excluir"
                                    data-nome="{{ $produto->nome }}">
                                    Excluir
                                </a>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6" class="text-center">Nenhum produto encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $produtos->links() }}
        </div>
    </div>
    {{-- SweetAlert2 --}}
    <script>
    document.querySelectorAll('.btn-excluir').forEach(button => {
        button.addEventListener('click', function (e) {
            let form = this.closest('form');
            let nome = this.getAttribute('data-nome');

            Swal.fire({
                title: 'Excluir Produto?',
                text: `Você realmente deseja excluir "${nome}"? Essa ação não pode ser desfeita.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sim, excluir',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
</x-layouts.app>
