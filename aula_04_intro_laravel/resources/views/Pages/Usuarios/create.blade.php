<x-dash-layout>
    <h1 class='text-center text-2xl font-bold'>Insira um Novo Usuário</h1>
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
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input type="number" name="idade"/></td>
            </tr>
        </table>
    </form>
    <x-primary-button><input form="create" type="submit" value="Criar"></x-primary-button>
    <a href="/dashboard/dashUsuarios"><x-secondary-button><input type="submit" value="Cancelar" /></x-secondary-button></a>
</x-dash-layout>
