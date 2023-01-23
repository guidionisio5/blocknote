$(document).ready(function () {

  // executa a função lista categorias
  listarCategorias()

});

const novaCategoria = () =>{
    
  // captura todo formulário e cria um formData
  let categoria = new FormData($('#form-categoria')[0]);

  // envio e recebimento de dados
  const result = fetch('../backend/_nova_categoria.php', {
    method: 'POST',
    body: categoria
  })
    .then((response => response.json()))
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
    })

}

const listarCategorias = () => {
  const result = fetch('../backend/_listar_categorias.php')
      .then((response) => response.json())
      .then((result) => {
        $("#bloco-categoria").html('')
          result.map(categoria => {
             $('#bloco-categoria').append(`
                <a href="#" class="blocos">${categoria.categorias}</a>
             `)
          })

          $("#bloco-categoria").append(`
            <div class="blocos"> 
                <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <p class="mais">+</p>
                </button>
            </div>
          `)
      })
}