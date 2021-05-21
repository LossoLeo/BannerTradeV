<a href="/addativos/create">Clique para adicionar novo ativo</a>

<h1>Banner</h1>
<style>

.descricao{
    margin-top: 300px;
    width: 1920px;
    height: 200px;
    columns: 50px 60;
}

</style>

@foreach($events as $event)
    <li>{{ $event->nomeativo}} - {{ $event->minutagem}}</li>
@endforeach




<div class="descricao">
        @foreach($events as $event)
            {{ $event->nomeativo}}<br>{{ $event->minutagem}}
        @endforeach
</div>
