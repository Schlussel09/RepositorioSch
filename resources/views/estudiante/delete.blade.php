<div class="modal fade" id="modal-delete-{{$estudiante->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('estudiante.destroy', $estudiante->id)}}" method="POST">
    @csrf
        @method('DELETE')
        <input type="submit" class="delete_estudiante btn btn-danger btn-sm m-3" value="Eliminar"> 
            
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de estudiante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       ¿Desea eliminar al estudiante {{$estudiante->nombre}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <input type="submit" class="delete_estudiante btn btn-danger btn-sm m-3" value="Eliminar">    
                </div>
      </div>
      </form>
    </div>
  </div>
</div>