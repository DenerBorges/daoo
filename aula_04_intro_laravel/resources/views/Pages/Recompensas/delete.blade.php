<x-dash-layout>
    @if ($recompensa)
        <h1>{{$recompensa->titulo}}</h1>
        <ul>
            <li>Descrição: {{$recompensa->descricao}}</li>
            <li>Valor: R${{$recompensa->valor}}</li>
        </ul>
        <form action="{{route('removerec',$recompensa->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <x-primary-button><input type="submit" name='confirmar' value="Deletar" /></x-primary-button>
            <x-secondary-button><input type="submit" name='confirmar' value="Cancelar" /></x-secondary-button>
        </form>
    @else
        <p>Recompensa não encontrada! </p>
    @endif
</x-dash-layout>
