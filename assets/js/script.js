const cadastrarUsuarios = () =>{

    // captura todo formulário e cria um formData
    let dados = new FormData($('#form-usuarios')[0]);

    // envio e recebimento de dados
    const result = fetch('../backend/_cadastar_usuario.php',{
      method: 'POST',
      body: dados
    })
    .then((response=>response.json()))
    .then((result)=>{

        Swal.fire({
          icon: result.retorno != 'ok' ? 'error' : 'success',
          title: 'Atenção',
          text: result.mensagem,
        })

    })

    
} 