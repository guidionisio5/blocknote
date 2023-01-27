$(document).ready(function () {

  // executa a função lista categorias
  listarLembretes()

  
    //   utilização da biblioteca input mask para criar mascara de telefone
    // deixa o negocio mais bonitinho
    $('#data-lembrete').inputmask('99/99/9999')
    $('#horario').inputmask('99:99')

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
                    <p>
                      <button type="button" class="btn btn-deletar" onclick="confirmaDeletarLembrete(${lembrete.id})"><i class="bi bi-trash-fill"></i></button>
                      <button type="button" class="btn btn-deletar" onclick="abreModalEditarLembrete(${lembrete.id},'${lembrete.titulo}','${lembrete.data_lembrete}','${lembrete.tempo}')"><i class="bi bi-pencil-square"></i></button>
                    </p>
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

const abreModalEditarLembrete = (id,titulo,data_lembrete,tempo) => {
      
  $('#modal-editar-lembrete').html(
    `<div class="modal" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modal-cor">
            <div class="modal-header">
                <h1 class="modal-title fs-5 texto-menu" id="exampleModalLabel">Editar lembrete!</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-editar-lembrete">
                    <div class="mb-3">
                        <label for="titulo" class="col-form-label texto-menu">Titulo:</label>
                        <input type="text" class="form-control input-cor texto-menu" name="titulo" id="titulo" value="${titulo}">
                    </div>
                    <div class="mb-3">
                        <label for="data-lembrete" class="col-form-label texto-menu">Data:</label>
                        <input type="text" class="form-control input-cor texto-menu" name="data-lembrete" id="data-lembrete" value="${data_lembrete}">
                    </div>
                    <div class="mb-3">
                        <label for="tempo" class="col-form-label texto-menu">Horário:</label>
                        <input type="text" class="form-control input-cor texto-menu" name="tempo" id="tempo" value="${tempo}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="editarLembrete(${id})">Salvar</button>
            </div>
            </div>
        </div>
    </div>`
  )
  var myModal = new bootstrap.Modal(document.getElementById('editarModal'))
  myModal.show()

}

const editarLembrete = (id) => {

  
  let dados = new FormData($('#form-editar-lembrete')[0]);
  dados.append('id', id);
  
  
const result = fetch(`../backend/_editar_lembrete.php`, {
  method: 'POST',
  body: dados

})
  .then((response) => response.json())
  .then((result) => {

  
    Swal.fire({
        icon: result.retorno == 'ok' ? 'sucess' : 'error',
        title: 'ATENÇÃO!',
        text: result.Mensagem,
        showConfirmButton: false,
        timer: 1500
    
    })

    listarLembretes()

})
}