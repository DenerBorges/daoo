<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Projeto</title>
</head>
<body>
    @if ($projeto)
        <h1>{{$projeto->nome}}</h1>
        <ul>
            <li>Meta: R${{$projeto->meta_de_valor}}</li>
            <li>Dias Restantes: {{$projeto->dias_para_atingir}}</li>
        </ul>
        <form action="{{route('removeproj',$projeto->id)}}" method="post">
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
        <p>Projeto não encontrado! </p>
        <a href="/projetos">&#9664;Voltar</a>
    @endif
</body>
</html>
