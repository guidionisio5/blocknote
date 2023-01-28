const salvarAnotacoes = () =>{

  let titulo = $('#titulo').val();
  let categorias = $('#option-categoria').val();
  let anotacoes = tinyMCE.get('anotacoes').getContent()
  var descricao = tinymce.get('descricao').getContent();

  // envio e recebimento das notas
  const result = fetch('../backend/_salvar_anotacoes.php', {
    method: 'POST',
    body: `titulo=${titulo}&categorias=${categorias}&anotacoes=${anotacoes}&descricao=${descricao}`,
    headers: {
      'Content-type': 'application/x-www-form-urlencoded'
    }
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
