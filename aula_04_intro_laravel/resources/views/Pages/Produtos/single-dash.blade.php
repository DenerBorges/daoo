<x-dash-layout>
    <div class="text-center mt-8">
        @vite('resources/css/show-prod.css')
        @if ($produto)
            <h1 class='my-12 text-4xl font-bold'>{{ $produto->nome }}</h1>
            <p>{{ $produto->descricao }}</p>
            <table>
                </thead>
                <tbody>
                    <tr>
                        <th>Preço</th>
                        <td>{{ number_format($produto->preco, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Quantidade</th>
                        <td>{{ $produto->qtd_estoque }}</td>
                    </tr>
                    <tr>
                        <th>Importado</th>
                        {{-- <td>{{ $produto->importado ? 'Sim' : 'Não' }}</td> --}}
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
            <a href="{{ route('editprod', $produto->id) }}"><x-primary-button>Editar</x-primary-button></a>
            <a href="{{ route('deleteprod', $produto->id) }}"><x-danger-button>Deletar</x-danger-button></a>
        @else
            <p>Produtos não encontrados! </p>
        @endif
        <div>
            <a href="/dashboard">&#9664;Voltar</a>
        </div>
    </div>
</x-dash-layout>
