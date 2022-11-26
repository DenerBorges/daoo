<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Usuários</title>
</head>

<body>
    <h1>Insira um Novo Usuário</h1>
    <form action="/usuario" method="POST">
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
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
