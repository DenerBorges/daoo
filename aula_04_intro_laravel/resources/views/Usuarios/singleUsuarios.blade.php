<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>

<body>
    @if ($single)
    <h1>{{$single->nome}}</h1>
    <ul>
        <li>E-mail: {{$single->email}}</li>
        <li>Senha: {{$single->senha}}</li>
        <li>Idade: {{($single->idade)}}</li>
    </ul>
    <tr>
        <td>
            <a href="{{route('editusu',$single->id)}}">editar</a> |
            <a href="{{route('deleteusu',$single->id)}}">deletar</a>
        </td>
    </tr>
    @else
    <p>Usuário não encontrado! </p>
    @endif
    <br><br><br>
    <a href="/usuarios">&#9664;Voltar</a>
</body>
</html>
