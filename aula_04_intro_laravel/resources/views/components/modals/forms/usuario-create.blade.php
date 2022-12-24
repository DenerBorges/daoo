<div x-cloak>
    <div x-show="open"
        x-bind:class="!open ? 'hidden' :
            'overflow-y-auto overflow-x-hidden flex justify-center fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray-900/25'">
        <div class="flex rounded-md p-5 flex-col justify-center w-1/2 min-w-min pt-10 mt-10 bg-white"
            @click.away="open = false">
            <h1 class='text-center text-2xl font-bold'>Insira um novo Usuário</h1>
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
            <div class='flex justify-center gap-24 w-full'>
                <x-primary-button @click="open=false" class='w-30' form='create'>Criar</x-primary-button>
                <x-secondary-button @click="open=false" class='w-30'>Cancelar</x-secondary-button>
            </div>
        </div>
    </div>
</div>
