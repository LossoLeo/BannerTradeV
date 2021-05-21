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



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>