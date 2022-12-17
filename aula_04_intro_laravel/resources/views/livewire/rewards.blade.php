<div>
    @if (isset($recompensas) && $recompensas->count() > 0)
        <x-tables.rewards-live :recompensas="$recompensas" class="table-odd" type="hover" />
        @auth
            <div style="display: flex; flex-direction: row; justify-content: flex-end">
                <a href="/recompensa"><button>Criar Nova Recompensa</button></a>
            </div>
        @endauth
    @else
        <p>Recompensas não encontradas! </p>
    @endif
</div>
