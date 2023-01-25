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
                  <p><button type="submit" class="btn btn-deletar" data-bs-target="#modalDeletar" onclick="confirmaDeletarCategoria(${categoria.id})" data-bs-toggle="modal">Deletar Categorias</button></p>
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