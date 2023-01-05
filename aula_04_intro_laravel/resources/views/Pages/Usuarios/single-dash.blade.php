<x-dash-layout>
    <div class="text-center mt-8">
        @vite('resources/css/show.css')
        @if ($usuario)
            <h1 class='text-4xl font-bold'>{{$usuario->nome}}</h1>
            <table>
                </thead>
                <tbody>
                    <tr>
                        <th>Email</th>
                        <td>{{$usuario->email}}</td>
                    </tr>
                    <tr>
                        <th>Senha</th>
                        <td>{{$usuario->password}}</td>
                    </tr>
                    <tr>
                        <th>Idade</th>
                        <td>{{($usuario->idade)}}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route('editusu',$usuario->id)}}"><x-primary-button>Editar</x-primary-button></a> |
            <a href="{{route('deleteusu',$usuario->id)}}"><x-danger-button>Deletar</x-danger-button></a>
        @else
            <p>Usuário não encontrado! </p>
        @endif
        <div>
            <a href="/dashboard/dashUsuarios">&#9664;Voltar</a>
        </div>
    </div>
</x-dash-layout>
