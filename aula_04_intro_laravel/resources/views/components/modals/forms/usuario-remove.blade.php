<div class="flex flex-col justify-center w-1/2 bg-gray-300 h-auto m-0 p-3 bg-white self-center">
    <div class="p-2 mb-2 border-b-2 border-gray-300 ">
        <h1 class="text-2xl">{{ $usuario->nome }}</h1>
    </div>
    <ul>
        <li>Email: {{$usuario->email}}</li>
        <li>Senha: {{$usuario->senha}}</li>
        <li>Idade: {{$usuario->idade}}</li>
    </ul>
    <form id="{{ $usuario->id }}" wire:submit.prevent="remove({{ $usuario->id }})" method="POST">
        <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
    </form>
    <table>
        <tr align="center">
            <td>
                <x-secondary-button class='btn btn-info' @click="idmodal=null">Cancelar</x-secondary-button></a>
            </td>
            <td>
                <x-danger-button
                    class='px-2 py-1 mx-0 my-0'
                    @click="idmodal=null;"
                    form="{{ $usuario->id }}"
                    type="submit"
                    name='confirmar'
                    >
                    Deletar
                </x-danger-button>
            </td>
        </tr>
    </table>
</div>
