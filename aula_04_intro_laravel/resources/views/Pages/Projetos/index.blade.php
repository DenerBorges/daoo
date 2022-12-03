<x-main-layout>
    <h1>Projetos</h1>
    @if ($projetos->count() > 0)
    <x-tables.projetos :projetos="$projetos" class="table-odd" type="hover" />
    <div style="display: flex; flex-direction: row; justify-content: flex-end">
        <a href="/projeto"><button>Criar Novo Projeto</button></a>
    </div>
    @else
    <p>Projetos não encontrados! </p>
    @endif
</x-main-layout>
