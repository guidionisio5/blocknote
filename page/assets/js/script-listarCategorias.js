$(document).ready(function () {

    // executa a função lista categorias
    listarCategorias()
  
  });
  
const listarCategorias = () => {
    const result = fetch('../backend/_listar_categorias.php')
        .then((response) => response.json())
        .then((result) => {
          $("#bloco-categoria").html('')
            result.map(categoria => {
               $('#bloco-categoria').append(`
                  <a href="#" class="blocos">${categoria.categorias}
                    <p>
                      <button type="submit" class="btn btn-deletar" data-bs-target="#modalDeletar" onclick="confirmaDeletarCategoria(${categoria.id})" data-bs-toggle="modal"><i class="bi bi-trash-fill"></i></button>
                      <button type="submit" class="btn btn-deletar" data-bs-target="#modalEditar" onclick="abreModalEditar(${categoria.id},'${categoria.categorias}')" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></button>
                      <button type="submit" class="btn btn-deletar" onclick="abreModalAnotacoes()"><i class="bi bi-list-ul"></i></button>
                    </p>
                  </a>
               `)
            })
  
            $("#bloco-categoria").append(`
              <div class="blocos-mais"> 
                  <button type="submit" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <p class="mais">+</p>
                  </button>
              </div>
            `)
            
        })
      
  }

  const confirmaDeletarCategoria = (id) =>{
      Swal.fire({
        title: `Deseja mesmo deletar esta categoria?`,
        text: "Você não será capaz de reverter isso!",
        icon: 'Carregando',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!'
      }).then((result) => {
        if (result.isConfirmed) {
          deletarCategorias(id)
        }
    })
  }

  const deletarCategorias = (id) => {

    const result = fetch(`../backend/_deletar_categorias.php`, {
      method: 'POST',
      body: `id=${id}`,
      headers: {
          'Content-type': 'application/x-www-form-urlencoded'
      } 
    
    })
      .then((response) => response.json())
      .then((result) => {

      
        Swal.fire({
            icon: result.retorno == 'ok' ? 'success' : 'error',
            title: 'ATENÇÃO!',
            text: result.Mensagem,
            showConfirmButton: false,
            timer: 1500
        
        })
  
        listarCategorias()

    })

    
    
  }

  const abreModalEditar = (id,categorias) => {
    
    $('#modal-editar-categoria').html(
      `<div class="modal" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content" id="modal-cor">
              <div class="modal-header">
                  <h1 class="modal-title fs-5 texto-menu" id="exampleModalLabel">Editar categoria!</h1>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="form-editar-categorias">
                      <div class="mb-3">
                          <label for="categorias" class="col-form-label texto-menu">Nome da categoria:</label>
                          <input type="text" class="form-control input-cor texto-menu" name="categorias" id="categorias" value="${categorias}">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="editarCategoria(${id})">Salvar</button>
              </div>
              </div>
          </div>
      </div>`
    )
    var myModal = new bootstrap.Modal(document.getElementById('editarModal'))
    myModal.show()
  
  }

  const editarCategoria = (id) => {
    
    let dados = new FormData($('#form-editar-categorias')[0]);
    dados.append('id', id);

    const result = fetch(`../backend/_editar_categorias.php`, {
      method: 'POST',
      body: dados
    
    })
      .then((response) => response.json())
      .then((result) => {

      
        if(result.retorno == 'erro'){
          Swal.fire({
          icon: result.retorno == 'erro' ? 'error' : 'success',
          title: 'Atenção',
          text: result.mensagem,
          showConfiirmButton: false
        })
        }else{
          Swal.fire({
            title: 'Sucesso!',
            text: result.mensagem,
            icon: 'success',
            confirmButtonColor: '#078BB7',
            confirmButtonText: 'OK!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.replace("http://localhost/blocknote/page/categorias.php")
            }
          })
        }
  
        listarCategorias()

    })

  }

  const abreModalAnotacoes = () => {

  $('#modal-listar-anotacoes').html(
    `<div class="modal" id="modalListar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" id="modal-cor">
              <div class="modal-header">
                  <h1 class="modal-title fs-5 texto-menu" id="exampleModalLabel">Anotações da Catgoria: Escola</h1>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Titulo</th>
                              <th scope="col">Data de Lançamento</th>
                              <th> </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="texto-menu">Matematica</td>
                              <td class="texto-menu">Mark</td>
                              <td>
                              <button type="submit" class="btn btn-deletar" ><i class="bi bi-trash-fill"></i></button>
                              <button type="submit" class="btn btn-deletar" ><i class="bi bi-pencil-square"></i></button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="novaCategoria()">Salvar</button>
              </div>
          </div>
      </div>
    </div>`
  )
  var myModal = new bootstrap.Modal(document.getElementById('modalListar'))
  myModal.show()

  }