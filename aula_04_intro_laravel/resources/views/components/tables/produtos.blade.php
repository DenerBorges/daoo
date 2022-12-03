<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade de Estoque</th>
            <th>Preço</th>
            <th>Importado</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td><a href="/produtos/{{ $produto->id }}">{{ $produto->id }}</a></td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->qtd_estoque }}</td>
                <td>{{ $produto->preco }}</td>
                {{-- <td>{{($produto->importado)?'Sim':'Não'}}</td> --}}
                <td align="center">
                    <input type="checkbox" disabled {{ $produto->importado ? 'checked' : '' }}>
                </td>
                <td>
                    <a href="{{ route('editprod', $produto->id) }}">editar</a> |
                    <a href="{{ route('deleteprod', $produto->id) }}">deletar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
