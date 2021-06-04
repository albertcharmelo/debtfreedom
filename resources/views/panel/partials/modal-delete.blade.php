<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('post.destroy', 'post_id') }}" method="post">
                @method('DELETE')
                @csrf

                <div class="modal-body">
                    <p>Cuidado!, estas cerca de eliminar un Post.</p>
                    <p>¿Estas seguro de eliminar el Post?</p>
                    <input type="hidden" name="post_id" id="post_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Borrar Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
