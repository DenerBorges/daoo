<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Projetos</title>
</head>
<body>
    <h1>Projetos</h1>
    @if ($projetos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Meta de Valor</th>
                <th>Dias Restantes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projetos as $projeto)
            <tr>
                <td><a href="http://127.0.0.1:8000/projetos/{{$projeto->id}}">{{$projeto->id}}</a></td>
                <td>{{$projeto->nome}}</td>
                <td>R${{$projeto->meta_de_valor}}</td>
                <td>{{$projeto->dias_para_atingir}}</td>
                <td>
                    <a href="{{route('editproj',$projeto->id)}}">editar</a> |
                    <a href="{{route('deleteproj',$projeto->id)}}">deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Projetos não encontrados! </p>
    @endif
    <br>
    <a href="/projeto"><button>Criar Projetos</button></a>
</body>
</html>
