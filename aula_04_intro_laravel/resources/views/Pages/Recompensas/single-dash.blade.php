<x-dash-layout>
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
            <a href="{{route('editrec',$recompensa->id)}}"><x-primary-button>Editar</x-primary-button></a> |
            <a href="{{route('deleterec',$recompensa->id)}}"><x-danger-button>Deletar</x-danger-button></a>
        @else
            <p>Recompensa não encontrada! </p>
        @endif
        <div>
            <a href="/dashboard/dashRecompensas">&#9664;Voltar</a>
        </div>
    </div>
</x-dash-layout>
