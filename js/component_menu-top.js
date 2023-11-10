class menutop extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = `
        <div class="search__buscar">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
            stroke="#697089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <input type="search" placeholder="Search for anything...">
      </div>
      <div class="add-button">
          <button type="button" class="btn_category_user" data-toggle="modal" data-target="#category_user_modal">
          Añadir una categoria
          </button>
      </div>
    </div>
      
    <!-- Modal de category_user-->
    <div class="modal fade" id="category_user_modal" tabindex="-1" role="dialog" aria-labelledby="category_user_modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="category_user_modalLabel">Agregar categorias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form class="form-group row form2" action="../back/back_app/modulo3/add_category.php" method="POST">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputcategory_name">Nombre de la Categoría</label >
                          <input type="text" class="form-control" name="category_name" id="inputcategory_name"  placeholder="Nombre de la Categoria" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="status_category">Estado</label>
                          <select class="form-select" name="status_category" id="inputstatus_category" required>
                              <option selected="">seleccione un opción</option>
                              <option value="1">Habilitado</option>
                              <option value="0">Deshabilitado</option>
                          </select>
                      </div>
                      <hr>
                      <p><a href="../app/modulo8.php" data-bs-toggle="tooltip" title="Tooltip">Administra tus categorías aquí</a></p>  
                  </div>
                  <button type="submit" class="btn btn-info mb-2" name="add_cate">Guardar</button>
                  <button type="reset" class="btn btn_register">Limpiar</button>
              </form>
          </div>             
        </div>
      </div>
        `;
    }
}

window.customElements.define("menu-top", menutop);