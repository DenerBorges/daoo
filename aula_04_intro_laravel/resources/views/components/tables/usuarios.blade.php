<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.com')
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Idade</th>
            @if (Auth::user() && Route::is('dashboard'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td><a href="/usuarios/{{$usuario->id}}">{{$usuario->id}}</a></td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->senha}}</td>
            <td>{{($usuario->idade)}}</td>
            @if (Auth::user() && Route::is('dashboard'))
                <td>
                    <a href="{{route('editusu',$usuario->id)}}">editar</a> |
                    <a href="{{route('deleteusu',$usuario->id)}}">deletar</a>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
