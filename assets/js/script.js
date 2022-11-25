// função adcionar usuarios 
const cadastrarUser = () => {

  // captura todo formulário e cria um formData
  let dados = new FormData($('#cadastrarUser')[0]);

  // envio e recebimento de dados
  const result = fetch('backend/_cadastrar_usuario.php', {
    method: 'POST',
    body: dados
  })
    .then((response => response.json()))
    .then((result) => {

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
const loginUser = async () => {

  loader = await AbreLoader()
  // animateCSS('.container', 'zoomOut');

  setInterval(function () {
    let dados = new FormData($('#loginUser')[0]);

    const result = fetch('backend/_login.php', {
      method: 'POST',
      body: dados
    })
      .then((response => response.json()))
      .then((result) => {
        // Swal.fire({
        //   icon: result.retorno == 'ok' ? 'success' : 'error',
        //   title: 'Atenção',
        //   text: result.mensagem,
        //   showConfiirmButton: false,
        //   timer: 5000
        // })
        result.retorno == 'ok' ? window.location.replace("http://localhost/blocknote/include/loader.php") : ''
      })
  }, 1000);
}
// final função login usuarios 




const AbreLoader = async () => {

  $('body').addClass('animate__animated animate__zoomOut')

  const element = document.querySelector('body');

  element.style.setProperty('--animate-duration', '1.2s');

}






const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);


    node.classList.add(`${prefix}animated`, animationName);
    element.style.setProperty('--animate-duration', '2s');

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, { once: true });
  });
