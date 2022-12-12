<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Valor</th>
            @if (Auth::user() && Route::is('dashRecompensas'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($recompensas as $recompensa)
            <tr>
                @if (Auth::user() && Route::is('dashRecompensas'))
                    <td><a href="{{route('recompensa.single-dash',$recompensa->id) }}">{{ $recompensa->id }}</a></td>
                    <td><a href="{{route('recompensa.single-dash',$recompensa->id) }}">{{ $recompensa->titulo }}</a></td>
                @else
                    <td><a href="/recompensas/{{ $recompensa->id }}">{{ $recompensa->id }}</a></td>
                    <td><a href="/recompensas/{{ $recompensa->id }}">{{ $recompensa->titulo }}</a></td>
                @endif
                <td>{{$recompensa->descricao}}</td>
                <td>R${{$recompensa->valor}}</td>
                @if (Auth::user() && Route::is('dashRecompensas'))
                    <td>
                        <a href="{{route('editrec',$recompensa->id)}}">editar</a> |
                        <a href="{{route('deleterec',$recompensa->id)}}">deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
