<!-- --------MODAL DE REGISTRO DE LIBRO-------------- -->
<div class="modal fade" id="registrar_libro_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo Libro <i class="fas fa-book"></i></h5>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" id="form1">
         
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <textarea id="titulo" name="titulo" class="form-control"></textarea>
          </div>
          <br>
          <div class="form-group">
          <label for="nombre_proveedor">Lanzamiento (AAAA/MM/DD)</label>
          <input type="text" id="lanzamiento" name="lanzamiento" value="" class="form-control" />
          </div>
          <br>
          <div class="form-group">
            <label for="nombre_proveedor">Autor</label>
            <input type="text" id="autor" name="autor" value="" class="form-control" />
         
          </div>
          <br>
          <div class="form-group">
              <label for="select_unidad">Categoria</label>
              <select id="select_categoria" name="select_categoria" class="form-select" aria-label="Default select example">
              <option value="Ficcion">Ficción</option>
              <option value="Educacion">Educación</option>
              <option value="Biografico">Biografico</option>
              <option value="Romance">Romance</option>
              </select>
            </div>
          <br>
          <div class="form-group">
            <label for="observaciones">Sipnosis</label>
            <textarea id="sipnosis" name="sipnosis" class="form-control"></textarea>
          </div>
          <br>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar <i
            class="fas fa-times"></i></button>
        <!------ Boton que llama a la funcion de guardar libro     ------->
        <button type="submit" id="guardarBtn" class="btn btn-primary" onclick="guardarLibro()">Guardar <i
            class="far fa-save"></i></button>
      </div>
    </div>
  </div>
</div>
</form>