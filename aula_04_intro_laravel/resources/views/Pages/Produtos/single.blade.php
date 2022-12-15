<x-main-layout>
<div class="text-center mt-8">
    @vite('resources/css/show.css')
    @if ($produto)
        <h1 class='text-4xl font-bold'>{{$produto->nome}}</h1>
        <p>{{$produto->descricao}}</p>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Preço</th>
                    <td>R$ {{number_format($produto->preco, 2)}}</td>
                </tr>
                <tr>
                    <th>Quantidade</th>
                    <td>{{$produto->qtd_estoque}}</td>
                </tr>
                <tr>
                    <th>Importado</th>
                    <td>
                        @if ($produto->importado)
                            <input type="checkbox" disabled checked>
                        @else
                            <input type="checkbox" disabled>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('editprod', $produto->id)}}"><button>Editar</button></a> |
        <a href="{{route('deleteprod', $produto->id)}}"><button>Deletar</button></a>
    @else
        <p>Produto não encontrado! </p>
    @endif
        <div>
            <a href="/">&#9664;Voltar</a>
        </div>
</div>
</x-main-layout>
