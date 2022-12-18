<div x-data="{
    open: false,
    idmodal:null,
}">
<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>ID</a></th>
            <th><a href="#" wire:click='orderByTitle'>Título</a></th>
            <th>Descrição</th>
            <th><a href="#" wire:click='orderByValue'>Valor</a></th>
            @if (Auth::user() && Route::is('dashRecompensas'))
                <th colspan="2">Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($recompensas as $recompensa)
            <tr>
                @if (Auth::user() && Route::is('dashRecompensas'))
                    <td><a href="{{route('singleDashRec',$recompensa->id) }}">{{ $recompensa->id }}</a></td>
                    <td><a href="{{route('singleDashRec',$recompensa->id) }}">{{ $recompensa->titulo }}</a></td>
                @else
                    <td><a href="/recompensas/{{ $recompensa->id }}">{{ $recompensa->id }}</a></td>
                    <td><a href="/recompensas/{{ $recompensa->id }}">{{ $recompensa->titulo }}</a></td>
                @endif
                <td>{{$recompensa->descricao}}</td>
                <td>R${{$recompensa->valor}}</td>
                @if (Auth::user() && Route::is('dashRecompensas'))
                    <td class='actions'>
                        <x-primary-button class='px-2 py-1 mx-0 my-0'
                        @click=" idmodal = 'modal-upd-{{ $recompensa->id }}'">
                            Atualizar
                        </x-primary-button>
                    </td>
                    <td class='actions'>
                        <x-danger-button class='px-2 py-1 mx-0 my-0'
                        @click=" idmodal = 'modal-rm-{{ $recompensa->id }}'">
                            Remover
                        </x-danger-button>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($recompensas as $recompensa)
    <x-modals.recompensa-modal
        id="{{'modal-rm-'.$recompensa->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$recompensa->titulo.' ('.$recompensa->id.')'}}</x-slot>
        <x-modals.forms.recompensa-remove :recompensa="$recompensa"/>
    </x-forms.recompensa-modal>
@endforeach
@foreach ($recompensas as $recompensa)
    <x-modals.recompensa-modal
        id="{{'modal-upd-'.$recompensa->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$recompensa->nome.' ('.$recompensa->id.')'}}</x-slot>
        <x-modals.forms.recompensa-update :recompensa="$recompensa"/>
    </x-forms.recompensa-modal>
@endforeach
</div>
