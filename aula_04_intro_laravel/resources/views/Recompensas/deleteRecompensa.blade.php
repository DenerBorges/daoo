<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Recompensa</title>
</head>
<body>
    @if ($recompensa)
        <h1>{{$recompensa->titulo}}</h1>
        <ul>
            <li>Descrição: {{$recompensa->descricao}}</li>
            <li>Valor: R${{$recompensa->valor}}</li>
        </ul>
        <form action="{{route('removerec',$recompensa->id)}}" method="post">
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
        <p>Recompensa não encontrada! </p>
        <a href="/recompensas">&#9664;Voltar</a>
    @endif
</body>
</html>
