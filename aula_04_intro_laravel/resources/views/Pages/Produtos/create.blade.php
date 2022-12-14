<x-dash-layout>
    <h1 class='text-center text-2xl font-bold'>Insira um Novo Produto</h1>
    <form id="create" action="/produto" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Quantidade em Estoque:</td>
                <td><input type="text" name="qtd_estoque"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco"/></td>
            </tr>
            <tr>
                <td>Importado:</td>
                <td><input type="checkbox" name="importado"/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form="create" type="submit" value="Criar"></x-primary-button>
    <a href="/dashboard"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
