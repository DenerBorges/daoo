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
    @else
    <p>Projeto não encontrado! </p>
    @endif
    <a href="http://127.0.0.1:8000/projetos">Voltar</a>
</body>
</html>
