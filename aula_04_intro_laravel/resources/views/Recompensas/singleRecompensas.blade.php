<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recompensa</title>
</head>

<body>
    @if ($single)
    <h1>{{$single->titulo}}</h1>
    <p>{{$single->descricao}}</p>
    <ul>
        <li>Valor: R${{$single->valor}}</li>
    </ul>
    <tr>
        <td>
            <a href="{{route('editrec',$single->id)}}">editar</a> |
            <a href="{{route('deleterec',$single->id)}}">deletar</a>
        </td>
    </tr>
    @else
    <p>Recompensa não encontrada! </p>
    @endif
    <br><br><br>
    <a href="/recompensas">&#9664;Voltar</a>
</body>
</html>
