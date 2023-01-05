<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recompensas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class='text-4xl'>Recompensas</h2>
                    @if (isset($recompensas) && $recompensas->count() > 0)
                    <div style="display:flex; flex-direction: row; justify-content:flex-end">
                        <a href="/recompensa"><x-primary-button>Criar Nova Recompensa</x-primary-button></a>
                    </div>
                    <x-tables.recompensas :recompensas="$recompensas" class='table-odd' type='hover'/>
                    @else
                        <p>Recompensas não encontrados! </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class='text-4xl'>Usuários Autenticados</h2>
                    @if (isset($usuarios) && $usuarios->count() > 0)
                        <ul>
                            @foreach ($usuarios as $usuario)
                                <li>{{ $usuario->nome }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Usuários Autenticados não encontrados! </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
