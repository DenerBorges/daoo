<x-main-layout>
    <h1>Usuários</h1>
    @if ($usuarios->count() > 0)
    <x-tables.usuarios :usuarios="$usuarios" class="table-odd" type="hover" />
    <div style="display: flex; flex-direction: row; justify-content: flex-end">
        <a href="/usuario"><button>Criar Novo Usuários</button></a>
    </div>
    @else
    <p>Usuários não encontrados! </p>
    @endif
</x-main-layout>
