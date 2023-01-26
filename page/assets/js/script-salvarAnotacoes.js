const salvarAnotacoes = () =>{
    
  // captura todo formulário e cria um formData
  let notas = new FormData($('#salvarAnotacoes')[0]);
  
  let dados = new FormData($('#form-anotacoes')[0]);

  // envio e recebimento das notas
  const result = fetch('../backend/_salvar_anotacoes.php', {
    method: 'POST',
    body: notas,dados
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
            window.location.replace("http://localhost/blocknote/page/central-escritor.php")
          }
        })
    
        
      }
    })
}
