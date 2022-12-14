<x-dash-layout>
    <h1>Atualize o Produto</h1>
    <form id="edit" action="{{route('updateprod',$produto->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$produto->nome}}"/></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10">{{$produto->descricao}}</textarea></td>
            </tr>
            <tr>
                <td>Quantidade em Estoque:</td>
                <td><input type="text" name="qtd_estoque" value="{{$produto->qtd_estoque}}"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco" value="{{$produto->preco}}"/></td>
            </tr>
            <tr>
                <td>Importado:</td>
                <td><input type="checkbox" name="importado" {{($produto->importado)?'checked':''}}/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form=edit type="submit" name='confirmar' value="Salvar"/></x-primary-button>
    <a href="/dashboard"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
