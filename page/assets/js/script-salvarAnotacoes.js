$(document).ready(function () {

  // executa a função lista categorias
  listarAnotacoes()

});

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
            
            tinymce.get('anotacoes').setContent('');
            tinymce.get('descricao').setContent('');
            $('#titulo').val('');
            $('#option-categoria').val(0);
            $('#salvarModal').modal('hide');
            
          }
        })
    
        
      }
    })
}

const listarAnotacoes = () => {

  var urlAtual = window.location.href;
  var urlClass = new URL(urlAtual);
  var id = urlClass.searchParams.get("id");
  var nomeCategoria = urlClass.searchParams.get("categoria");
  
  const result = fetch('../backend/_listar_anotacoes.php',{
    method: 'POST',
    body: `id=${id}`,
    headers: {
        'Content-type': 'application/x-www-form-urlencoded'
    }
  })
    .then((response) => response.json())
    .then((result) => {
      $("#tabela-anotacoes").html('')
      $("#nome-categoria").html('')
        result.map(anotacoes => {
          $("#tabela-anotacoes").append(`
            <td style="color: white;">${anotacoes.titulo}</td>
            <td style="color: white;">${anotacoes.data_cadastro}</td>
            <td style="color: white;" class="text-center">
                <button type="submit" onclick="confirmaDeletarAnotacoes(${anotacoes.id})" class="btn btn-deletar"><i class="bi bi-trash-fill"></i></button>
                <button type="submit" class="btn btn-deletar"><i class="bi bi-pencil-square"></i></button>
            </td>  
          `)
        })

        $("#nome-categoria").append(`
          <h5>Lista da Categoria ${nomeCategoria}:</h5>  
        `)
        
    })
}

const confirmaDeletarAnotacoes = (id) =>{
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
      deletarAnotacoes(id)
    }
})
}

const deletarAnotacoes = (id) => {

  const result = fetch(`../backend/_deletar_anotacoes.php`, {
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

      listarAnotacoes()

  })

  
  
}
