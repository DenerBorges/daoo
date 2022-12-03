<x-main-layout>
    <h1>Insira um Novo Projeto</h1>
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
    <input form="create" type="submit" value="Criar">
    <a href="/projetos"><button>Cancelar</button></a>
</x-main-layout>
