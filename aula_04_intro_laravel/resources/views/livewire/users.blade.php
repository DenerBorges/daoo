<div x-data="{ open: false }">
    @if (isset($usuarios) && $usuarios->count() > 0)
    <div style="display: flex; flex-direction: row; justify-content: flex-end">
        <x-primary-button @click="open = true">Criar Novo Usuário</x-primary-button>
    </div>
    <!-- CONTEÚDO DO MODAL-->
    <div x-cloak>
        <div x-show="open"
            x-bind:class="!open ? 'hidden' :
                'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray-900/25'">

            <div class="flex rounded-md p-5 justify-center flex-col w-1/2 min-w-min pt-10 mt-10 bg-white"
                @click.away="open = false">
                <h1 class='text-center text-2xl font-bold'>Insira um novo Usuário</h1>
                <a href="#" @click="open=false" class="place-self-end font-black text-lg p-1.5 border-8 rounded-full bg-gray-600 text-white">X</a>
                <form id=create @submit.prevent="$wire.save()" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
                    <table>
                        <tr>
                            <td>Nome:</td>
                            <td><input wire:model='nome' type="text" name="nome" /></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input wire:model='email' type="email" name="email" /></td>
                        </tr>
                        <tr>
                            <td>Senha:</td>
                            <td><input wire:model='senha' type="password" name="senha" /></td>
                        </tr>
                        <tr>
                            <td>Idade:</td>
                            <td><input wire:model='idade' type="number" name="idade" /></td>
                        </tr>
                    </table>
                </form>
                {{-- <input type="submit" value="Criar" form=create /> --}}
                <x-primary-button @click="open=false" class='w-30' form='create'>Criar</x-primary-button>
                <x-secondary-button @click="open=false" class='w-30'>Cancelar</x-secondary-button>
            </div>
        </div>
    </div>
    <x-tables.users-live :usuarios="$usuarios" class="table-odd" type="hover" />
    @else
        <p>Usuários não encontrados! </p>
    @endif
</div>
