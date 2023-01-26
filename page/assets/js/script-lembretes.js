$(document).ready(function () {

  // executa a função lista categorias
  listarLembretes()

});

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
        $("#bloco-lembrete").html('')
          result.map(lembrete => {
              $('#bloco-lembrete').append(`
              <div class="item-linha">
                <div class="bolinha"></div>
                <div href="" class="blocos">
                    <h3 class="desc">${lembrete.titulo}</h3>
                    <h5 class="desc">${lembrete.data_lembrete}</h5>
                    <p class="desc">${lembrete.tempo}</p>
                    <p><button type="button" class="btn btn-deletar" onclick="confirmaDeletarLembrete(${lembrete.id})">Deletar Lembrete</button></p>
                </div>
            </div>
              `)
          })

          $("#bloco-lembrete").append(`
            <div class="item-linha">
              <div class="blocos-mais">
                  <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <p class="mais">+</p>
                  </button>
              </div>
            </div>
          `)
      })
}

const confirmaDeletarLembrete = (id) =>{
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
      deletarLembrete(id)
    }
})
}

const deletarLembrete = (id) => {

const result = fetch(`../backend/_deletar_lembrete.php`, {
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

    listarLembretes()

})



}
  