var h1Saudar = document.getElementById('Saudar')
var pTexto = document.getElementById('Texto')
var divTerciario = document.getElementById('Terciario')
var imagem = document.getElementById('Imagens')
var aAdicionar = document.getElementById('Adicionar')
var inputNumero = document.getElementById('Numero')
var btnExecutar = document.getElementById('Executar')
var data = new Date()
var hora = data.getHours()


if(hora >=5 && hora <= 12){
    document.body.style.background = 'rgb(238, 238, 51)'
    h1Saudar.textContent = hora+" h"
    pTexto.textContent = 'Bom dia espero que tens um bom dia'
    imagem.setAttribute("src","./Imagem/883f0316-3881-4c7f-916c-2ee2edec2f5b.jpg")

}else if(hora > 12 && hora < 18){
    document.body.style.background = 'rgb(4, 4, 82)'
    h1Saudar.textContent = hora+"h"
    pTexto.textContent = 'Boa tarde espero que tenhas uma tarde abençoada'
    imagem.setAttribute("src","./Imagem/a976fb95-bafb-4c14-b622-613d21f0e94b.jpg")
}else{
    document.body.style.background = 'rgba(0, 0, 0, 0.925)'
    h1Saudar.textContent = hora+'h'
    pTexto.textContent = 'Boa noite espero que durmas bem para teres um bom dia amanhã'
    imagem.setAttribute("src","./Imagem/ecdad90d-ee8e-4d1a-a272-dcdd402abd19.jpg")
}


divTerciario.style.display = 'none'
aAdicionar.onclick = function ablitar(){
    if(divTerciario.style.display == 'none'){
        divTerciario.style.display = 'block'
    }else{
        divTerciario.style.display = 'none'
    }
}


btnExecutar.onclick = function analizar(){

    hora = inputNumero.value

    if(hora >4 && hora < 12){
        document.body.style.background = 'rgb(238, 238, 51)'
        h1Saudar.style.color = 'white'
        h1Saudar.textContent = hora+"h"
        pTexto.textContent = 'Bom dia espero que tens um bom dia'
        imagem.setAttribute("src","./Imagem/883f0316-3881-4c7f-916c-2ee2edec2f5b.jpg")
        document.getElementById('Numero').value = ""
    }else if(hora >= 12 && hora < 18){
        document.body.style.background = 'rgb(4, 4, 82)'
        h1Saudar.style.color = 'white'
        h1Saudar.textContent = hora+"h"
        pTexto.textContent = 'Boa tarde espero que tenhas uma tarde abençoada'
        imagem.setAttribute("src","./Imagem/a976fb95-bafb-4c14-b622-613d21f0e94b.jpg")
        document.getElementById('Numero').value = ""
    }else if(hora >= 0 && hora < 5 | hora > 17 && hora < 24){
        document.body.style.background = 'rgba(0, 0, 0, 0.925)'
        h1Saudar.style.color = 'white'
        h1Saudar.textContent = hora+'h'
        pTexto.textContent = 'Boa noite espero que durmas bem para teres um bom dia amanhã'
        imagem.setAttribute("src","./Imagem/ecdad90d-ee8e-4d1a-a272-dcdd402abd19.jpg")
        document.getElementById('Numero').value = ""
    }else{
        alert('Insira uma hora que exista')
    }
}
