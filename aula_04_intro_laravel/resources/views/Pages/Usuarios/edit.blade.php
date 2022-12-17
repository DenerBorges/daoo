<x-dash-layout>
    <h1>Atualize o Usuário</h1>
    <form id="edit" action="{{route('updateusu',$usuario->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$usuario->nome}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$usuario->email}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="senha" value="{{$usuario->senha}}"/></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input type="number" name="idade" value="{{$usuario->idade}}"/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form=edit type="submit" name='confirmar' value="Salvar"/></x-primary-button>
    <a href="/dashboard/dashUsuarios"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
