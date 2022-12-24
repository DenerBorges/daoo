<div x-data="{ open: false }" class="flex justify-center">
    <x-modals.forms.projeto-create />
    <div class="w-1/1">
        <div class="py-3 pr-5 flex justify-start">
            <x-primary-button @click="open = true">Novo Projeto</x-primary-button>
        </div>
        @if (isset($projetos) && $projetos->count() > 0)
            <x-tables.projects-live :projetos="$projetos" class="table-odd" type="hover" />
        @else
            <p>Projetos não encontrados! </p>
        @endif
    </div>
</div>
