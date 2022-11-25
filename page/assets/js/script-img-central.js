const tirarImg = () =>{
    $('#img-bloco').removeClass('img-fundo')
}

const voltaImg = () =>{
    let verifica = $('#img-bloco').val()
    console.log(verifica)
    if(verifica.trim().length == 0){
        $('#img-bloco').addClass('img-fundo')
    }
    
}

const tirarTxt = () =>{
    $('#txt-descricao').removeClass('img-descricao')
}

const voltaTxt = () =>{
    let verifica = $('#txt-descricao').val()
    console.log(verifica)
    if(verifica.trim().length == 0){
        $('#txt-descricao').addClass('img-descricao')
    }
    
}