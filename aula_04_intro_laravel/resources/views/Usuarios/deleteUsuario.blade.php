<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Usuário</title>
</head>

<body>
    @if ($usuario)
        <h1>{{$usuario->nome}}</h1>
        <ul>
            <li>Email: {{$usuario->email}}</li>
            <li>Senha Restantes: {{$usuario->senha}}</li>
            <li>Idade: {{$usuario->idade}}</li>
        </ul>
        <form action="{{route('removeusu',$usuario->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                        <input type="submit" name='confirmar' value="Cancelar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Usuário não encontrado! </p>
    @endif
    <br><br><br>
    <a href="/usuarios">&#9664;Voltar</a>
</body>
</html>
