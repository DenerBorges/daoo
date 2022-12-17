<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>ID</a></th>
            <th><a href="#" wire:click='orderByTitle'>Título</a></th>
            <th>Descrição</th>
            <th><a href="#" wire:click='orderByValue'>Valor</a></th>
            @if (Auth::user() && Route::is('dashRecompensas'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($recompensas as $recompensa)
            <tr>
                @if (Auth::user() && Route::is('dashRecompensas'))
                    <td><a href="{{route('singleDashRec',$recompensa->id) }}">{{ $recompensa->id }}</a></td>
                    <td><a href="{{route('singleDashRec',$recompensa->id) }}">{{ $recompensa->titulo }}</a></td>
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
