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
                  <a href="#" class="blocos">
                  ${categoria.categorias}
                  <p><button type="button" class="btn btn-deletar">Deletar Categorias</button></p>
                  </a>
               `)
            })
  
            $("#bloco-categoria").append(`
              <div class="blocos-mais"> 
                  <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <p class="mais">+</p>
                  </button>
              </div>
            `)
        })
  }