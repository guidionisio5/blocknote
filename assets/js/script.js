// função adcionar usuarios 
const cadastrarUsuarios = () =>{

    // captura todo formulário e cria um formData
    let dados = new FormData($('#form-usuarios')[0]);

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