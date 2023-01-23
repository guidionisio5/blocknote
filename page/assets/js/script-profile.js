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
                        <input class="input-grid" type="text" name="localizacao" id="localizacao" value="${usuario.localizacao}">
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <label for="tel">Telefone</label>
                        <input class="input-grid" type="text" name="tel" id="tel" value="${usuario.telefone}">
                    </div>
                </div>
              `)
            })

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
                                <input id="inputTag" type="file" />
                            <span id="imageName"></span>
                        </label> 
                    </div>
                </div>
            `)
        })
  }