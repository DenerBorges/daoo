<x-main-layout>
    <h1 class='text-4xl font-bold'>Produtos</h1>
    @if (isset($produtos) && $produtos->count() > 0)
        <x-tables.produtos :produtos="$produtos" class="table-odd" type="hover" />
        @auth
            <div style="display: flex; flex-direction: row; justify-content: flex-end">
                <a href="/produto"><button>Criar Novo Produto</button></a>
            </div>
        @endauth
    @else
        <p>Produtos não encontrados! </p>
    @endif
</x-main-layout>
