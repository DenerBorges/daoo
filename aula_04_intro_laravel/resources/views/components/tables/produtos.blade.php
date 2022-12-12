<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade de Estoque</th>
            <th>Preço</th>
            <th>Importado</th>
            @if (Auth::user() && Route::is('dashProdutos'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                @if (Auth::user() && Route::is('dashProdutos'))
                    <td><a href="{{route('produto.single-dash',$produto->id) }}">{{ $produto->id }}</a></td>
                    <td><a href="{{route('produto.single-dash',$produto->id) }}">{{ $produto->nome }}</a></td>
                @else
                    <td><a href="/produtos/{{ $produto->id }}">{{ $produto->id }}</a></td>
                    <td><a href="/produtos/{{ $produto->id }}">{{ $produto->nome }}</a></td>
                @endif
                <td>{{ $produto->qtd_estoque }}</td>
                <td>{{ $produto->preco }}</td>
                {{-- <td>{{($produto->importado)?'Sim':'Não'}}</td> --}}
                <td align="center">
                    <input type="checkbox" disabled {{ $produto->importado ? 'checked' : '' }}>
                </td>
                @if (Auth::user() && Route::is('dashProdutos'))
                    <td>
                        <a href="{{ route('editprod', $produto->id) }}">editar</a> |
                        <a href="{{ route('deleteprod', $produto->id) }}">deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
