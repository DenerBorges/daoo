<x-main-layout>
    @if ($recompensa)
        <h1>{{$recompensa->titulo}}</h1>
        <ul>
            <li>Descrição: {{$recompensa->descricao}}</li>
            <li>Valor: R${{$recompensa->valor}}</li>
        </ul>
        <form action="{{route('removerec',$recompensa->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar"/>
            <input type="submit" name='confirmar' value="Cancelar"/>
        </form>
    @else
        <p>Recompensa não encontrada! </p>
    @endif
</x-main-layout>
