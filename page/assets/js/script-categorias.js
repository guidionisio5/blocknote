
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

