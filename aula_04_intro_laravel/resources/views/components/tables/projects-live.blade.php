<div x-data="{
    idmodal:null,
}">
<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>ID</a></th>
            <th><a href="#" wire:click='orderByName'>Nome</a></th>
            <th><a href="#" wire:click='orderByValue'>Meta de Valor</a></th>
            <th>Dias Restantes</th>
            @if (Auth::user())
                <th colspan="2">Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($projetos as $projeto)
            <tr>
                @if (Auth::user())
                    <td><a href="{{route('singleDashProj',$projeto->id) }}">{{ $projeto->id }}</a></td>
                    <td><a href="{{route('singleDashProj',$projeto->id) }}">{{ $projeto->nome }}</a></td>
                @else
                    <td><a href="/projetos/{{ $projeto->id }}">{{ $projeto->id }}</a></td>
                    <td><a href="/projetos/{{ $projeto->id }}">{{ $projeto->nome }}</a></td>
                @endif
                <td>R${{$projeto->meta_de_valor}}</td>
                <td>{{$projeto->dias_para_atingir}}</td>
                @if (Auth::user())
                    <td class='actions'>
                        <x-primary-button class='px-2 py-1 mx-0 my-0'
                        @click=" idmodal = 'modal-upd-{{ $projeto->id }}'">
                            Atualizar
                        </x-primary-button>
                    </td>
                    <td class='actions'>
                        <x-danger-button class='px-2 py-1 mx-0 my-0'
                        @click=" idmodal = 'modal-rm-{{ $projeto->id }}'">
                            Remover
                        </x-danger-button>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($projetos as $projeto)
    <x-modals.projeto-modal
        id="{{'modal-rm-'.$projeto->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$projeto->nome.' ('.$projeto->id.')'}}</x-slot>
        <x-modals.forms.projeto-remove :projeto="$projeto"/>
    </x-forms.projeto-modal>
@endforeach
@foreach ($projetos as $projeto)
    <x-modals.projeto-modal
        id="{{'modal-upd-'.$projeto->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$projeto->nome.' ('.$projeto->id.')'}}</x-slot>
        <x-modals.forms.projeto-update :projeto="$projeto"/>
    </x-forms.projeto-modal>
@endforeach
</div>
