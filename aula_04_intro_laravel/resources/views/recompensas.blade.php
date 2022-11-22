<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Recompensas</title>
</head>
<body>
    <h1>Recompensas</h1>
    @if ($recompensas->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recompensas as $recompensa)
            <tr>
                <td><a href="http://127.0.0.1:8000/recompensas/{{$recompensa->id}}">{{$recompensa->id}}</a></td>
                <td>{{$recompensa->titulo}}</td>
                <td>{{$recompensa->descricao}}</td>
                <td>R${{$recompensa->valor}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Recompensas não encontradas! </p>
    @endif
</body>
</html>
