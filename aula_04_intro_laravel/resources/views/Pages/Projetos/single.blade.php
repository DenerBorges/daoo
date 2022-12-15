<x-main-layout>
<div class="text-center mt-8">
    @vite('resources/css/show.css')
    @if ($projeto)
        <h1 class='text-4xl font-bold'>{{$projeto->nome}}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Meta</th>
                    <td>R$ {{number_format($projeto->meta_de_valor, 2)}}</td>
                </tr>
                <tr>
                    <th>Dias Restantes</th>
                    <td>{{$projeto->dias_para_atingir}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('editproj',$projeto->id)}}"><button>Editar</button></a> |
        <a href="{{route('deleteproj',$projeto->id)}}"><button>Deletar</button></a>
    @else
        <p>Projeto não encontrado! </p>
    @endif
        <div>
            <a href="/">&#9664;Voltar</a>
        </div>
</div>
</x-main-layout>
