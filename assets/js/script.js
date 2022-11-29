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
      if(result.retorno == 'erro'){
        Swal.fire({
        icon: result.retorno == 'erro' ? 'error' : 'success',
        title: 'Atenção',
        text: result.mensagem,
        showConfiirmButton: false
      })
      }else{
        Swal.fire({
          title: 'Sucesso',
          text: result.mensagem,
          icon: 'success',
          confirmButtonColor: '#078BB7',
          confirmButtonText: 'OK!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.replace("http://localhost/blocknote/index.php")
          }
        })
    
        
      }
    })
}
// final da função adcionar usuarios   



// função login usuarios 
const loginUser = async () => {

  loader = await AbreLoader()
  // animateCSS('.container', 'zoomOut');

    let dados = new FormData($('#loginUser')[0]);

    const result = fetch('backend/_login.php', {
      method: 'POST',
      body: dados
    })
      .then((response => response.json()))
      .then((result) => {
        if(result.retorno == 'erro'){
          FechaLoader()
          Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: result.mensagem,
          })
        }else{
          window.location.replace("http://localhost/blocknote/include/loader.php")
        }
      })
}
// final função login usuarios 


// final funçao sair usuario
const AbreLoader = async () => {

  $('body').addClass('animate__animated animate__zoomOut')

  const element = document.querySelector('body');

  element.style.setProperty('--animate-duration', '1s');

}

const FechaLoader = async () => {

  $('body').removeClass('animate__animated animate__zoomOut')

  const element = document.querySelector('body');

  element.style.setProperty('--animate-duration', '1s');

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

  $(".option").click(function () {
    $(".option").removeClass("active");
    $(this).addClass("active");
  });