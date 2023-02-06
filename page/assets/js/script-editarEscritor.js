$(document).ready(function () {

    // executa a função lista categorias
    listarCategorias()
    valorAnotacoes()
    
  });

  const listarCategorias = () => {
    const result = fetch('../backend/_listar_categorias.php')
        .then((response) => response.json())
        .then((result) => {
          $("#bloco-categoria").html('')
          $("#option-categoria").html('')

          $('#option-categoria').append(`
            <option class="option-cor" value="0" selected>Escolha uma categoria</option>
          `)
          
          result.map(categoria => {
            $('#option-categoria').append(`
              <option class="option-cor texto-menu" value="${categoria.id}" class="">${categoria.categorias}</option>
            `)
          })

          $("#bloco-categoria").append(`
            <div class="item-categoria"> 
                <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <p class="mais">+</p>
                </button>
            </div>
          `) 
          
          for (i = 0; i <= 4; i++) {
            $('#bloco-categoria').append(`
              <a href="categorias.php" class="item-categoria">${result[i].categorias}</a>
            `)
          }
          
        })

      }

const abreModalSalvar = () => {
  
  var myModal = new bootstrap.Modal(document.getElementById('salvarModal'))
  myModal.show()

}

const valorAnotacoes = () =>{

  var urlAtual = window.location.href;
  var urlClass = new URL(urlAtual);
  var titulo = urlClass.searchParams.get("titulo");
  var anotacao = urlClass.searchParams.get("anotacao");
  var descricao = urlClass.searchParams.get("descricao");

  $('#titulo').val(titulo);
  $('#anotacoes-editar').val(anotacao);
  $('#descricao-editar').val(descricao);
}
