<x-main-layout>
    <h1 class='text-4xl font-bold'>Usuários</h1>
    @if (isset($usuarios) && $usuarios->count() > 0)
        <x-tables.usuarios :usuarios="$usuarios" class="table-odd" type="hover" />
        @auth
            <div style="display: flex; flex-direction: row; justify-content: flex-end">
                <a href="/usuario"><button>Criar Novo Usuários</button></a>
            </div>
        @endauth
    @else
        <p>Usuários não encontrados! </p>
    @endif
</x-main-layout>
