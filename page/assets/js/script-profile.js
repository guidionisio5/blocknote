$(document).ready(function () {

    // executa a função lista categorias
    listarProfile()
  
});

const listarProfile = () => {
    const result = fetch('../backend/_dados_profile.php')
        .then((response) => response.json())
        .then((result) => {
          $("#profile").html('')
            result.map(usuario => {
               $('#profile').append(`
                    <div class="">
                        <div class="">
                            <label for="nome">Nome do usuário</label>
                            <input class="input-grid" type="text" name="nome" id="nome" value="${usuario.nome}"> 
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <label for="email">Email do usuário</label>
                            <input class="input-grid" type="email" name="email" id="email" value="${usuario.email}">
                        </div>
                    </div>
        
                    <div class="">
                        <div class="">
                            <label for="localizacao">Localização</label>
                            <input class="input-grid" type="text" name="localizacao" id="localizacao" value="${usuario.localizacao == null ? '' : `${usuario.localizacao}`}">
                        </div>
                    </div>

                    <div class="">
                        <div class="">
                            <label for="tel">Telefone</label>
                            <input class="input-grid" type="text" name="tel" id="tel" value="${usuario.telefone == null ? '' : `${usuario.telefone}`}">
                        </div>
                    </div>
                `)    
                    $("#profile").append(`
                        <div class="">
                            <div class="">
                                <label for="senha">Trocar senha</label>
                                <input class="input-grid" type="password" name="senha" id="senha">
                            </div>
                        </div>
                        <div class="">

                        <div class="">
                            Selecionar foto de perfil
                            <label for="inputTag" class="label">
                                <i class="fa fa-2x fa-camera icon"></i>
                                    <input id="inputTag" type="file" name="imagem" />
                                <span id="imageName"></span>
                            </label> 
                        </div>
                    </div>
                `)

                $("#descricao").append(`
                    <div class="">
                        <h5>Descrição do Usuário</h5>
                        <textarea class="desc-grid" name="desc" id="desc">${usuario.desc == null ? '' : `${usuario.desc}`}</textarea>
                    </div>
                `)

                $("#img-profile").append(`
                    <div class="">
                        <img alt="avatar" class="img-user" src="${usuario.imagem == null ? 'assets/img/user.png' : `assets/img/avatar/${usuario.imagem}`}">
                    </div>

                    <div class="img-text">
                        <h3>${usuario.nome}</h3>
                        <h5>${usuario.localizacao == null ? '' : `${usuario.localizacao}`}</h5>
                    </div>
                `)
            })

            
        })
  }

  const updateProfile = () =>{
    
    // captura todo formulário e cria um formData
    let dados = new FormData($('#form-profile')[0]);
  
    // envio e recebimento de dados
    const result = fetch('../backend/_update_profile.php', {
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
              window.location.replace("http://localhost/blocknote/page/profile.php")
            }
          })
      
          
        }
      })
  
  }