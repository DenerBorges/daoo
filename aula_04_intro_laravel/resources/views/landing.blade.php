<x-main-layout>
    <div class="container mx-auto">
        <div class="justify-items-center grid h-80 min-h-80 2xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4 sm:grid-cols-2 sm:gap-1 grid-cols-1 gap-5">
            @if (isset($projetos) && $projetos->count() > 0)
                @foreach ($projetos as $projeto)
                    <x-cards.produtos :projeto="$projeto" />
                @endforeach
            @endif
        </div>
    </div>
</x-main-layout>
