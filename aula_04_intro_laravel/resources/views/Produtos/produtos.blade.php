<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    @if ($produtos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Importado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td><a href="http://127.0.0.1:8000/produtos/{{$produto->id}}">{{$produto->id}}</a></td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->qtd_estoque}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{($produto->importado)?'Sim':'Não'}}</td>
                <td>
                    <a href="{{route('editprod',$produto->id)}}">editar</a> |
                    <a href="{{route('deleteprod',$produto->id)}}">deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Produtos não encontrados! </p>
    @endif
    <br>
    <a href="/produto"><button>Criar Produto</button></a>
</body>
</html>