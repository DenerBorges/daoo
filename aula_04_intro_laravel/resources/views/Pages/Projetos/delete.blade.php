<x-main-layout>
    @if ($projeto)
        <h1>{{$projeto->nome}}</h1>
        <ul>
            <li>Meta: R${{$projeto->meta_de_valor}}</li>
            <li>Dias Restantes: {{$projeto->dias_para_atingir}}</li>
        </ul>
        <form action="{{route('removeproj',$projeto->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar" />
            <input type="submit" name='confirmar' value="Cancelar" />
        </form>
    @else
        <p>Projeto não encontrado! </p>
    @endif
</x-main-layout>
