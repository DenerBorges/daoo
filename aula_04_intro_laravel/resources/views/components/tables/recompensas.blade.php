<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Valor</th>
            @if (Auth::user() && Route::is('dashboard'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($recompensas as $recompensa)
        <tr>
            <td><a href="/recompensas/{{$recompensa->id}}">{{$recompensa->id}}</a></td>
            <td>{{$recompensa->titulo}}</td>
            <td>{{$recompensa->descricao}}</td>
            <td>R${{$recompensa->valor}}</td>
            @if (Auth::user() && Route::is('dashboard'))
                <td>
                    <a href="{{route('editrec',$recompensa->id)}}">editar</a> |
                    <a href="{{route('deleterec',$recompensa->id)}}">deletar</a>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
