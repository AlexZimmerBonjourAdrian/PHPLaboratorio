



<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

  <div class="mb-3">
    <label for="inputCalificar" class="form-label">Calificación (entre 1 al 5)</label>
    <input type="number" class="form-control" name="inputCalificar" id="inputCalificar" min="1" max="5">
  </div>
  <div class="mb-3">
    <label for="inputComentario" class="form-label">Comentario</label>
    <input type="text" name="inputComentario">
  </div>

    <input class="btn btn-primary" name="submit" type="submit" value="Evaluar" />

  
  <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancelar</a>


</form>
