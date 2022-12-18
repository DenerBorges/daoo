{{-- <div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6"> --}}
    <div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-fit m-0 p-3 bg-white self-center rounded-md">
        <div x-data="{
            recompensa: @js($recompensa),
            update() {
                this.recompensa.valor = Number(this.recompensa.valor)
                if (this.recompensa.valor) {
                    console.log({ recompensa: this.recompensa });
                    $wire.set('titulo', this.recompensa.titulo)
                    $wire.set('descricao', this.recompensa.descricao)
                    $wire.set('valor', this.recompensa.valor)
                    $wire.update(this.recompensa.id)
                } else {
                    alert('Erro ao atualizar recompensa!')
                }
            },
        } ">
            <form @submit.prevent="update()" id="recompensa-update-{{ $recompensa->id }}">
                {{-- @csrf --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                {{-- <input x-model="recompensa.id" type="hidden" name="id" value={{$recompensa->id}} /> --}}
                <table>
                    <tr>
                        <td>Título:</td>
                        <td><input x-model="recompensa.titulo" type="text" name="titulo"/></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td>
                            <textarea x-model="recompensa.descricao" name="descricao" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Valor:</td>
                        <td><input x-model="recompensa.valor" step="0.01" id="valor-{{ $recompensa->id }}" type="number" name="valor"/></td>
                    </tr>
                </table>
            </form>
            <div class='flex justify-center gap-24 w-full'>
                <x-secondary-button @click="idmodal=null">
                    Cancelar
                </x-secondary-button>
                <x-primary-button form="recompensa-update-{{ $recompensa->id }}" @click="idmodal=null">
                    Atualizar
                </x-primary-button>
            </div>
        </div>
    </div>
