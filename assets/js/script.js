// função adcionar usuarios 
const cadastrarUsuarios = () =>{

    // captura todo formulário e cria um formData
    let dados = new FormData($('#cadastro-usuarios')[0]);

    // envio e recebimento de dados
    const result = fetch('backend/_cadastrar_usuario.php',{
      method: 'POST',
      body: dados
    })
    .then((response=>response.json()))
    .then((result)=>{

        Swal.fire({
          icon: result.retorno == 'ok' ? 'success' : 'error',
          title: 'Atenção',
          text: result.mensagem,
          showConfiirmButton: false,
          timer: 5000
        })

    })
} 
// final da função adcionar usuarios   



// função login usuarios 
const loginUsuarios = () =>{
  
  let dados = new FormData($('#login-usuarios')[0]);

  const result = fetch('backend/_login.php',{
    method: 'POST',
    body: dados
  })
  .then((response=>response.json()))
  .then((result)=>{
    Swal.fire({
      icon: result.retorno == 'ok' ? 'success' : 'error',
      title: 'Atenção',
      text: result.mensagem,
      showConfiirmButton: false,
      timer: 5000
    })
  })
}






// final função login usuarios 