<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl dark:bg-gray-800 self-center rounded-md pt-6">
    <div class="flex flex-col justify-center w-fit shadow bg-gray-300 h-fit m-0 p-3 bg-white self-center rounded-md">
        <div x-data="{
            projeto: @js($projeto),
            update() {
                this.projeto.meta_de_valor = Number(this.projeto.meta_de_valor)
                this.projeto.dias_para_atingir = Number(this.projeto.dias_para_atingir)
                if (this.projeto.meta_de_valor &&
                    this.projeto.dias_para_atingir) {
                    console.log({ projeto: this.projeto });
                    $wire.set('nome', this.projeto.nome)
                    $wire.set('meta_de_valor', this.projeto.meta_de_valor)
                    $wire.set('importado', this.projeto.dias_para_atingir)
                    $wire.update(this.projeto.id)
                } else {
                    alert('Erro ao atualizar projeto!')
                }
            }
        } ">
            <form @submit.prevent="update()" id="projeto-update-{{ $projeto->id }}">
                {{-- @csrf --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                {{-- <input x-model="projeto.id" type="hidden" name="id" value={{$projeto->id}} /> --}}
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input x-model="projeto.nome" type="text" name="nome"/></td>
                    </tr>
                    <tr>
                        <td>Meta de Valor:</td>
                        <td><input x-model="projeto.meta_de_valor" step="0.01" id="meta_de_valor-{{ $projeto->id }}" type="number" name="meta_de_valor"/></td>
                    </tr>
                    <tr>
                        <td>Dias Restantes:</td>
                        <td><input x-model="projeto.dias_para_atingir" step="1" type="text" name="dias_para_atingir"/></td>
                    </tr>
                </table>
            </form>
            <div class='flex justify-center gap-24 w-full'>
                <x-secondary-button @click="idmodal=null">
                    Cancelar
                </x-secondary-button>
                <x-primary-button form="projeto-update-{{ $projeto->id }}" @click="idmodal=null">
                    Atualizar
                </x-primary-button>
            </div>
        </div>
    </div>
</div>
