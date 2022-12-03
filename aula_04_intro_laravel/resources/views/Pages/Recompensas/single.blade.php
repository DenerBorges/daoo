<x-main-layout>
    @vite('resources/css/show.css')
    @if ($recompensa)
    <div>
        <h1>{{$recompensa->titulo}}</h1>
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
            <a href="/recompensas">&#9664;Voltar</a>
        </div>
    </div>
</x-main-layout>
