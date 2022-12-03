<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>

<body>
    @if ($single)
    <h1>{{$single->nome}}</h1>
    <ul>
        <li>Meta: R${{$single->meta_de_valor}}</li>
        <li>Dias Restantes: {{$single->dias_para_atingir}}</li>
    </ul>
    <tr>
        <td>
            <a href="{{route('editproj',$single->id)}}">editar</a> |
            <a href="{{route('deleteproj',$single->id)}}">deletar</a>
        </td>
    </tr>
    @else
    <p>Projeto não encontrado! </p>
    @endif
    <br><br><br>
    <a href="/projetos">&#9664;Voltar</a>
</body>
</html>
