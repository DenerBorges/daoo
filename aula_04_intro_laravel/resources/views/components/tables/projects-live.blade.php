<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>ID</a></th>
            <th><a href="#" wire:click='orderByName'>Nome</a></th>
            <th><a href="#" wire:click='orderByValue'>Meta de Valor</a></th>
            <th>Dias Restantes</th>
            @if (Auth::user() && Route::is('dashProjetos'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($projetos as $projeto)
            <tr>
                @if (Auth::user() && Route::is('dashProjetos'))
                    <td><a href="{{route('singleDashProj',$projeto->id) }}">{{ $projeto->id }}</a></td>
                    <td><a href="{{route('singleDashProj',$projeto->id) }}">{{ $projeto->nome }}</a></td>
                @else
                    <td><a href="/projetos/{{ $projeto->id }}">{{ $projeto->id }}</a></td>
                    <td><a href="/projetos/{{ $projeto->id }}">{{ $projeto->nome }}</a></td>
                @endif
                <td>R${{$projeto->meta_de_valor}}</td>
                <td>{{$projeto->dias_para_atingir}}</td>
                @if (Auth::user() && Route::is('dashProjetos'))
                    <td>
                        <a href="{{route('editproj',$projeto->id)}}">editar</a> |
                        <a href="{{route('deleteproj',$projeto->id)}}">deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
