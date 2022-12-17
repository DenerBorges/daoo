<div>
    @if (isset($projetos) && $projetos->count() > 0)
        <x-tables.projects-live :projetos="$projetos" class="table-odd" type="hover" />
        @auth
            <div style="display: flex; flex-direction: row; justify-content: flex-end">
                <a href="/projeto"><button>Criar Novo Projeto</button></a>
            </div>
        @endauth
    @else
        <p>Projetos não encontrados! </p>
    @endif
</div>
