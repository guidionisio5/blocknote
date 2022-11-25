// funcao sair usuario
const sairUser = () =>{

    const result = fetch('../backend/_logout.php', {
      method: 'POST'
    })
      .then((response => response.json()))
      .then((result) => {
        result.retorno == 'ok' ? window.location.replace("http://localhost/blocknote/") : ''
      })
  }