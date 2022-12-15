<x-main-layout>
<div class="text-center mt-8">
    @vite('resources/css/show.css')
    @if ($recompensa)
        <h1 class='text-4xl font-bold'>{{$recompensa->titulo}}</h1>
        <p>{{$recompensa->descricao}}</p>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Valor</th>
                    <td>R$ {{number_format($recompensa->valor, 2)}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('editrec',$recompensa->id)}}"><button>Editar</button></a> |
        <a href="{{route('deleterec',$recompensa->id)}}"><button>Deletar</button></a>
    @else
        <p>Recompensa não encontrada! </p>
    @endif
        <div>
            <a href="/">&#9664;Voltar</a>
        </div>
</div>
</x-main-layout>
