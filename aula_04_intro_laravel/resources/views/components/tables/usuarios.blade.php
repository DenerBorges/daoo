<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Idade</th>
            @if (Auth::user() && Route::is('dashUsuarios'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                @if (Auth::user() && Route::is('dashUsuarios'))
                    <td><a href="{{route('usuario.single-dash',$usuario->id) }}">{{ $usuario->id }}</a></td>
                    <td><a href="{{route('usuario.single-dash',$usuario->id) }}">{{ $usuario->nome }}</a></td>
                @else
                    <td><a href="/usuarios/{{ $usuario->id }}">{{ $usuario->id }}</a></td>
                    <td><a href="/usuarios/{{ $usuario->id }}">{{ $usuario->nome }}</a></td>
                @endif
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{($usuario->idade)}}</td>
                @if (Auth::user() && Route::is('dashUsuarios'))
                    <td>
                        <a href="{{route('editusu',$usuario->id)}}">editar</a> |
                        <a href="{{route('deleteusu',$usuario->id)}}">deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
