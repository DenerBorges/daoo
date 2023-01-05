<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl dark:bg-gray-800 self-center rounded-md pt-6">
    <div class="flex flex-col justify-center w-fit shadow bg-gray-300 h-fit m-0 p-3 bg-white self-center rounded-md">
        <div x-data="{
            usuario: @js($usuario),
            update() {
                this.usuario.idade = Number(this.usuario.idade)
                if (this.usuario.idade) {
                    console.log({ usuario: this.usuario });
                    $wire.set('nome', this.usuario.nome)
                    $wire.set('email', this.usuario.email)
                    $wire.set('password', this.usuario.password)
                    $wire.set('idade', this.usuario.idade)
                    $wire.update(this.usuario.id)
                } else {
                    alert('Erro ao atualizar usuario!')
                }
            },
        } ">
            <form @submit.prevent="update()" id="usuario-update-{{ $usuario->id }}">
                {{-- @csrf --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                {{-- <input x-model="usuario.id" type="hidden" name="id" value={{$usuario->id}} /> --}}
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input x-model="usuario.nome" type="text" name="nome"/></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input x-model="usuario.email" type="email" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input x-model="usuario.password" type="password" name="password"/></td>
                    </tr>
                    <tr>
                        <td>Idade:</td>
                        <td><input x-model="usuario.idade" step="0.01" id="idade-{{ $usuario->id }}" type="number" name="idade"/></td>
                    </tr>
                </table>
            </form>
            <div class='flex justify-center gap-24 w-full'>
                <x-secondary-button @click="idmodal=null">
                    Cancelar
                </x-secondary-button>
                <x-primary-button form="usuario-update-{{ $usuario->id }}" @click="idmodal=null">
                    Atualizar
                </x-primary-button>
            </div>
        </div>
    </div>
</div>
