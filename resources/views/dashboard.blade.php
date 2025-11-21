<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col items-center justify-center min-h-screen bg-neutral-50 dark:bg-neutral-900 px-6 py-10 gap-10">

        <div class="flex flex-col items-center justify-center text-center space-y-4">
                <h1 class="text-4xl font-extrabold text-emerald-700 dark:text-emerald-400 tracking-wide drop-shadow-md">
                    CT DO DALMAGÃO
                </h1>
        </div>


        <div class="flex flex-wrap justify-center gap-6 mt-8">
            <a href="{{ url('/produtos') }}" 
               class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-semibold shadow-md hover:bg-emerald-700 transition">
                Produtos
            </a>

            <a href="{{ url('/categorias') }}" 
               class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow-md hover:bg-indigo-700 transition">
                Categorias
            </a>

            <a href="{{ url('/alunos') }}" 
               class="px-6 py-3 rounded-xl bg-rose-600 text-white font-semibold shadow-md hover:bg-rose-700 transition">
                Alunos
            </a>

            <a href="{{ url('/treinos') }}" 
               class="px-6 py-3 rounded-xl bg-orange-600 text-white font-semibold shadow-md hover:bg-orange-700 transition">
                Treinos
            </a>

            <a href="{{ url('/professores') }}" 
               class="px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-700 transition">
                Professores
            </a>
        </div>
    </div>
</x-layouts.app>
