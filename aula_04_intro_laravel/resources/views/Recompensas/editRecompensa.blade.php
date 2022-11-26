<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Recompensa</title>
</head>

<body>
    <h1>Atualize o Recompensa</h1>
    <form action="{{route('updaterec',$recompensa->id)}}" method="POST">
        @csrf
        <table>
        <tr>
                <td>Título:</td>
                <td><input type="text" name="titulo" value="{{$recompensa->titulo}}"/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10">{{$recompensa->descricao}}</textarea></td>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="number" name="valor" value="{{$recompensa->valor}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/recompensas"><button>Cancelar</button></a>
</body>
</html>
