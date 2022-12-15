<x-main-layout>
    <h1>Insira uma Nova Recompensa</h1>
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
    <input form="create" type="submit" value="Criar">
    <a href="/dashboard/dashRecompensas"><button>Cancelar</button></a>
</x-main-layout>
