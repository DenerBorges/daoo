<x-main-layout>
    <h1>Recompensas</h1>
    @if ($recompensas->count() > 0)
    <x-tables.recompensas :recompensas="$recompensas" class="table-odd" type="hover" />
    <div style="display: flex; flex-direction: row; justify-content: flex-end">
        <a href="/recompensa"><button>Criar Nova Recompensa</button></a>
    </div>
    @else
    <p>Recompensas não encontradas! </p>
    @endif
</x-main-layout>
