<x-layouts.app>
<body>
<div class="container">
    <h1>Lista de Professores</h1>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <a href="{{ route('professores.create') }}" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar Professor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
            <tr>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->email }}</td>
                <td>{{ $professor->cpf }}</td>
                <td>{{ $professor->telefone }}</td>
                <td>
                    <a href="{{ route('professores.show', $professor) }}" class="link blue">Ver</a>
                    <a href="{{ route('professores.edit', $professor) }}" class="link yellow">Editar</a>

                    <form action="{{ route('professores.destroy', $professor) }}" method="POST" class="inline form-excluir">
                        @csrf
                        @method('DELETE')

                        <a 
                            href="#" 
                            class="link red btn-excluir" 
                            data-nome="{{ $professor->nome }}">
                            Excluir
                        </a>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if ($professores->hasPages())
            <div class="pagination">
                <div class="pagination-info">
                    {{ $professores->firstItem() }}–{{ $professores->lastItem() }}
                    de {{ $professores->total() }}
                </div>
                <div class="pagination-links">
                    {{ $professores->links() }}
                </div>
            </div>
        @endif

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.btn-excluir').forEach(button => {
            button.addEventListener('click', function (e) {
                let form = this.closest('form');
                let nome = this.getAttribute('data-nome');

                Swal.fire({
                    title: 'Excluir Professor?',
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

</div>
</body>
</x-layouts.app>
