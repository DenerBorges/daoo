<div x-data="{ open: false }" class="flex justify-center">
    <x-modals.forms.usuario-create />
    <div class="w-3/4">
        <div class="py-3 pr-5 flex justify-start">
            <x-primary-button @click="open = true">Novo Usuário</x-primary-button>
        </div>
        @if (isset($usuarios) && $usuarios->count() > 0)
            <x-tables.users-live :usuarios="$usuarios" class="table-odd" type="hover" />
        @else
            <p>Usuários não encontrados! </p>
        @endif
    </div>
</div>
