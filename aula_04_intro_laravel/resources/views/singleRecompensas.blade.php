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
    @else
    <p>Recompensa não encontrada! </p>
    @endif
    <a href="http://127.0.0.1:8000/recompensas">Voltar</a>
</body>
</html>
