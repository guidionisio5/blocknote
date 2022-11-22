// função adcionar usuarios 
const cadastrarUser = () =>{

    // captura todo formulário e cria um formData
    let dados = new FormData($('#cadastrarUser')[0]);

    // envio e recebimento de dados
    const result = fetch('backend/_cadastrar_usuario.php',{
      method: 'POST',
      body: dados
    })
    .then((response=>response.json()))
    .then((result)=>{

        // Swal.fire({
        //   icon: result.retorno == 'ok' ? 'success' : 'error',
        //   title: 'Atenção',
        //   text: result.mensagem,
        //   showConfiirmButton: false,
        //   timer: 5000
        // })

        result.retorno == 'ok' ? window.location.replace("http://localhost/blocknote/page/paginaPrincipal.php") : ''
    })
} 
// final da função adcionar usuarios   



// função login usuarios 
const loginUser = () =>{
  
  let dados = new FormData($('#loginUser')[0]);

  const result = fetch('backend/_login.php',{
    method: 'POST',
    body: dados
  })
  .then((response=>response.json()))
  .then((result)=>{
    // Swal.fire({
    //   icon: result.retorno == 'ok' ? 'success' : 'error',
    //   title: 'Atenção',
    //   text: result.mensagem,
    //   showConfiirmButton: false,
    //   timer: 5000
    // })
    result.retorno == 'ok' ? window.location.replace("http://localhost/blocknote/page/paginaPrincipal.php") : ''
  })
}
// final função login usuarios 