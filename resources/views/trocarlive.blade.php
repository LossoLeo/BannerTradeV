<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('inicio')}}" method="POST">
                    @csrf
                    <label for="lives">Qual a live?</label>
                    <select name="id_live" id="id_live" required>
                        @foreach($lives as $live)
                            <option value="{{ $live->id }}">{{ $live->name }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
                </form>
            </div>
        </div>
    </div>
</div>
