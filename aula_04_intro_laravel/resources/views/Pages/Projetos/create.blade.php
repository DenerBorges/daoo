<x-dash-layout>
    <h1 class='text-center text-2xl font-bold'>Insira um Novo Projeto</h1>
    <form id="create" action="/projeto" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Meta de Valor:</td>
                <td><input type="number" name="meta_de_valor"/></td>
            </tr>
            <tr>
                <td>Dias Restantes:</td>
                <td><input type="text" name="dias_para_atingir"/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form="create" type="submit" value="Criar"></x-primary-button>
    <a href="/dashboard/dashProjetos"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
