$(document).ready(function () {

    // executa a função lista categorias
    listarCategorias()
  
  });




const listarCategorias = () => {
    const result = fetch('../backend/_listar_categorias.php')
        .then((response) => response.json())
        .then((result) => {
          $("#bloco-categoria").html('')

            for (i = 1; i <= 5; i++) {
              $('#bloco-categoria').append(`
                  <a href="categorias.php" class="item-categoria">${result[i].categorias}</a>
              `)
            }
  
            $("#bloco-categoria").append(`
              <div class="item-categoria"> 
                  <button type="button" class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <p class="mais">+</p>
                  </button>
              </div>
            `)

            $("#option-categoria").append(`
              <option class="option-cor" value="0" selected>Escolha uma categoria</option>
            `)
           

            result.map(categoria => {
              $('#option-categoria').append(`
                  <option class="option-cor texto-menu" value="${categoria.id}" class="">${categoria.categorias}</option>
              `)
            })
          
        })
}

const abreModalSalvar = () => {
  
  var myModal = new bootstrap.Modal(document.getElementById('deleteModal'))
  myModal.show()

}