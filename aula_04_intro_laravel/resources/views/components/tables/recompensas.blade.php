<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recompensas as $recompensa)
        <tr>
            <td><a href="/recompensas/{{$recompensa->id}}">{{$recompensa->id}}</a></td>
            <td>{{$recompensa->titulo}}</td>
            <td>{{$recompensa->descricao}}</td>
            <td>R${{$recompensa->valor}}</td>
            <td>
                <a href="{{route('editrec',$recompensa->id)}}">editar</a> |
                <a href="{{route('deleterec',$recompensa->id)}}">deletar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
