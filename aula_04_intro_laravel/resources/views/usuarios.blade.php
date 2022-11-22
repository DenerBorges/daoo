<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    @if ($usuarios->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td><a href="http://127.0.0.1:8000/usuarios/{{$usuario->id}}">{{$usuario->id}}</a></td>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{($usuario->idade)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuários não encontrados! </p>
    @endif
</body>
</html>
