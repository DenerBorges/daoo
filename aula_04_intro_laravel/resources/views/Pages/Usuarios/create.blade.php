<x-dash-layout>
    <h1>Insira um Novo Usuário</h1>
    <form id="create" action="/usuario" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha"/></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input type="number" name="idade"/></td>
            </tr>
        </table>
    </form>
    <input form="create" type="submit" value="Criar">
    <a href="/dashboard/dashUsuarios"><button>Cancelar</button></a>
</x-dash-layout>
