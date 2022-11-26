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
    @else
    <p>Usuário não encontrado! </p>
    @endif
    <a href="http://127.0.0.1:8000/usuarios">Voltar para página inicial</a>
</body>
</html>
