$(document).ready(function () {

    // executa a funçã// executa a função lista categorias
    listarCategorias()
    listarLembretes()
  
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
            
            for (i = 1; i <= 2; i++) {
                $('#bloco-categoria').append(`
                    <a href="categorias.php" class="blocos">${result[i].categorias}</a>
                `)
            }
  
            $("#bloco-categoria").append(`
              <div class="blocos-mais"> 
                  <button type="submit" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#categoriaModal">
                      <p class="mais">+</p>
                  </button>
              </div>
            `)
            
        })
      
  }

  const novoLembrete = () =>{
      
      // captura todo formulário e cria um formData
      let lembrete = new FormData($('#form-lembrete')[0]);
    
      // envio e recebimento de dados
      const result = fetch('../backend/_novo_lembrete.php', {
        method: 'POST',
        body: lembrete
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
                window.location.replace("http://localhost/blocknote/page/lembretes.php")
              }
            })
          }
        })
    
  }
  
  const listarLembretes = () => {
    const result = fetch('../backend/_listar_lembrete.php')
        .then((response) => response.json())
        .then((result) => {
          $("#bloco-lembrete").html('');
            
            for (i = 1; i <= 2; i++) {
                $('#bloco-lembrete').append(`
                    <div class="item-linha">
                        <div class="bolinha"></div>
                        <a href="lembretes.php" class="blocos">
                            <h3 class="desc">${result[i].titulo}</h3>
                            <h5 class="desc">${result[i].data_lembrete}</h5>
                            <p class="desc">${result[i].tempo}</p>
                        </a>
                    </div>
                `)
            }
  
            $("#bloco-lembrete").append(`
              <div class="item-linha">
                <div class="blocos-mais">
                    <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#lembreteModal">
                        <p class="mais">+</p>
                    </button>
                </div>
              </div>
            `)
        })
  }