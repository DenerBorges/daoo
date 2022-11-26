<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Usuários</title>
</head>

<body>
    <h1>Atualize o Usuário</h1>
    <form action="{{route('updateusu',$usuario->id)}}" method="POST">
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
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/usuarios"><button>Cancelar</button></a>
</body>
</html>
