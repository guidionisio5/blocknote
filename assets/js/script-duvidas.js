// função duvidas usuarios 
const duvidasUser = () => {

    // captura todo formulário e cria um formData
    let dados = new FormData($('#duvidasUser')[0]);
  
    // envio e recebimento de dados
    const result = fetch('backend/_duvidas_usuario.php', {
      method: 'POST',
      body: dados
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
              window.location.replace("http://localhost/blocknote/index.html")
            }
          })
       
        }
      })
  }
  // final da função duvidas usuarios  