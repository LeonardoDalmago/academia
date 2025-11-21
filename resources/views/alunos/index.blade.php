<x-layouts.app :title="__('Meus Alunos')">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<div class="container">
    <div class="header">
        <h1>Meus Alunos</h1>
        <a href="{{ route('alunos.create') }}" class="btn">+ Novo Aluno</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Status</th>
                <th style="width: 180px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>
                        <span class="{{ $aluno->status ? 'text-green' : 'text-red' }}">
                            {{ $aluno->status ? 'Ativo' : 'Inativo' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('alunos.show', $aluno) }}" class="link blue">Ver</a>
                        <a href="{{ route('alunos.edit', $aluno) }}" class="link yellow">Editar</a>

                        <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" class="inline form-excluir">
                            @csrf
                            @method('DELETE')

                            <a 
                                href="#" 
                                class="link red btn-excluir" 
                                data-nome="{{ $aluno->nome }}">
                                Excluir
                            </a>
                        </form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($alunos->hasPages())
            <div class="pagination">
                <div class="pagination-info">
                    {{ $alunos->firstItem() }}–{{ $alunos->lastItem() }}
                    de {{ $alunos->total() }}
                </div>
                <div class="pagination-links">
                    {{ $alunos->links() }}
                </div>
            </div>
        @endif
</div>

<script>
document.querySelectorAll('.btn-excluir').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();
        let form = this.closest('form');
        let nome = this.getAttribute('data-nome');

        Swal.fire({
            title: 'Excluir aluno?',
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
