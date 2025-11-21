<x-layouts.app :title="__('Meus Treinos')">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <div class="container">
        <div class="header">
            <h1>Meus Treinos</h1>
            <a href="{{ route('treinos.create') }}" class="btn">+ Novo Treino</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Exercício</th>
                    <th>Séries</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($treinos as $treino)
                    <tr>
                        <td>{{ $treino->exercicio }}</td>
                        <td>{{ $treino->series }}</td>
                        <td>
                            <a href="{{ route('treinos.show', $treino) }}" class="link blue">Ver</a>
                            <a href="{{ route('treinos.edit', $treino) }}" class="link yellow">Editar</a>

                            <form action="{{ route('treinos.destroy', $treino) }}" method="POST" class="inline form-excluir">
                                @csrf
                                @method('DELETE')

                                <a 
                                    href="#" 
                                    class="link red btn-excluir" 
                                    data-nome="{{ $treino->exercicio }}">
                                    Excluir
                                </a>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($treinos->hasPages())
            <div class="pagination">
                <div class="pagination-info">
                    {{ $treinos->firstItem() }}–{{ $treinos->lastItem() }}
                    de {{ $treinos->total() }}
                </div>
                <div class="pagination-links">
                    {{ $treinos->links() }}
                </div>
            </div>
        @endif
    </div>

    {{-- SweetAlert Confirmação --}}
    <script>
        document.querySelectorAll('.btn-excluir').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                let form = this.closest('form');
                let nome = this.getAttribute('data-nome');

                Swal.fire({
                    title: 'Excluir treino?',
                    text: `Você realmente deseja excluir o exercício "${nome}"?`,
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
