<x-dash-layout>
    @if ($usuario)
        <h1>{{$usuario->nome}}</h1>
        <ul>
            <li>Email: {{$usuario->email}}</li>
            <li>Senha: {{$usuario->senha}}</li>
            <li>Idade: {{$usuario->idade}}</li>
        </ul>
        <form action="{{route('removeusu',$usuario->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar" />
            <input type="submit" name='confirmar' value="Cancelar" />
        </form>
    @else
        <p>Usuário não encontrado! </p>
    @endif
</x-dash-layout>
