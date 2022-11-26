<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Projeto</title>
</head>

<body>
    <h1>Insira um Novo Projeto</h1>
    <form action="/projeto" method="POST">
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
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/projetos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
