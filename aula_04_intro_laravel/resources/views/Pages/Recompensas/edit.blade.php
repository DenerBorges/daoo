<x-main-layout>
    <h1>Atualize o Recompensa</h1>
    <form id="edit" action="{{route('updaterec',$recompensa->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Título:</td>
                <td><input type="text" name="titulo" value="{{$recompensa->titulo}}"/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10">{{$recompensa->descricao}}</textarea></td>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="number" name="valor" value="{{$recompensa->valor}}"/></td>
            </tr>
        </table>
    </form>
    <input form=edit type="submit" name='confirmar' value="Salvar"/>
    <a href="/recompensas"><button>Cancelar</button></a>
</x-main-layout>
