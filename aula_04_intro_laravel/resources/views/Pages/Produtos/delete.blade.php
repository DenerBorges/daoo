<x-dash-layout>
    @if ($produto)
        <h1>{{ $produto->nome }}</h1>
        <p>{{ $produto->descricao }}</p>
        <ul>
            <li>Quantidade: {{ $produto->qtd_estoque }}</li>
            <li>Preço: {{ $produto->preco }}</li>
            <li>Importado: {{ $produto->importado ? 'Sim' : 'Não' }}</li>
        </ul>
        <form action="{{route('removeprod',$produto->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <x-primary-button><input type="submit" name='confirmar' value="Deletar" /></x-primary-button>
            <x-secondary-button><input type="submit" name='confirmar' value="Cancelar" /></x-secondary-button>
        </form>
    @else
        <p>Produto não encontrado! </p>
    @endif
</x-dash-layout>
