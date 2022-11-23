<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    @if ($single)
    <h1>{{$single->descricao}}</h1>
    <p>{{$single->nome}}</p>
    <ul>
        <li>Quantidade: {{$single->qtd_estoque}}</li>
        <li>Preço: {{$single->preco}}</li>
        <li>Importado: {{($single->importado)?'Sim':'Não'}}</li>
    </ul>
    @else
    <p>Produto não encontrado! </p>
    @endif
    <a href="http://127.0.0.1:8000/produtos">Voltar para página inicial</a>
</body>
</html>
