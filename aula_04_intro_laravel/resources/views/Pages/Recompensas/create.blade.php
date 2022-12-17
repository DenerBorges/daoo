<x-dash-layout>
    <h1 class='text-center text-2xl font-bold'>Insira uma Nova Recompensa</h1>
    <form id="create" action="/recompensa" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Título:</td>
                <td><input type="text" name="titulo"/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="number" name="valor"/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form="create" type="submit" value="Criar"></x-primary-button>
    <a href="/dashboard/dashRecompensas"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
