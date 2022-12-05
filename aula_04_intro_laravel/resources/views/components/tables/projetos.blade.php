<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Meta de Valor</th>
            <th>Dias Restantes</th>
            @if (Auth::user() && Route::is('dashboard'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($projetos as $projeto)
        <tr>
            <td><a href="/projetos/{{$projeto->id}}">{{$projeto->id}}</a></td>
            <td>{{$projeto->nome}}</td>
            <td>R${{$projeto->meta_de_valor}}</td>
            <td>{{$projeto->dias_para_atingir}}</td>
            @if (Auth::user() && Route::is('dashboard'))
                <td>
                    <a href="{{route('editproj',$projeto->id)}}">editar</a> |
                    <a href="{{route('deleteproj',$projeto->id)}}">deletar</a>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
