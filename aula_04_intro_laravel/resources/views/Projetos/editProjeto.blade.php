<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Projeto</title>
</head>

<body>
    <h1>Atualize o Projeto</h1>
    <form action="{{route('updateproj',$projeto->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$projeto->nome}}"/></td>
            </tr>
            <tr>
                <td>Meta de Valor:</td>
                <td><input type="number" name="meta_de_valor" value="{{$projeto->meta_de_valor}}"/></td>
            </tr>
            <tr>
                <td>Dias Restantes:</td>
                <td><input type="text" name="dias_para_atingir" value="{{$projeto->dias_para_atingir}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/projetos"><button>Cancelar</button></a>
</body>
</html>
