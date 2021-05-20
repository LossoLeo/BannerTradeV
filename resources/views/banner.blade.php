<a href="/addativos/create">Clique para adicionar novo ativo</a>

<h1>Lista de ativos</h1>
@foreach($events as $event)
    <li>{{ $event->nomeativo}}<br> <li>{{ $event->minutagem}}</li> <br></li>
@endforeach