<x-dash-layout>
    <h1>Atualize o Projeto</h1>
    <form id="edit" action="{{route('updateproj',$projeto->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$projeto->nome}}"/></td>
            </tr>
            <tr>
                <td>Meta de Valor:</td>
                <td><input type="number" name="meta_de_valor" value="{{$projeto->meta_de_valor}}"/></td>
            </tr>
            <tr>
                <td>Dias Restantes:</td>
                <td><input type="text" name="dias_para_atingir" value="{{$projeto->dias_para_atingir}}"/></td>
            </tr>
        </table>
    </form>
    <input form=edit type="submit" name='confirmar' value="Salvar"/>
    <a href="/dashProjetos"><button>Cancelar</button></a>
</x-dash-layout>
