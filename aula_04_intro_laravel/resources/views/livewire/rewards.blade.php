<div x-data="{ open: false }" class="flex justify-center">
    <x-modals.forms.recompensa-create />
    <div class="w-3/4">
        <div class="py-3 pr-5 flex justify-start">
            <x-primary-button @click="open = true">Nova Recompensa</x-primary-button>
        </div>
        @if (isset($recompensas) && $recompensas->count() > 0)
            <x-tables.rewards-live :recompensas="$recompensas" class="table-odd" type="hover" />
        @else
            <p>Recompensas não encontradas! </p>
        @endif
    </div>
</div>
