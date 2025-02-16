const horas = document.getElementById('Horas')
const minutos = document.getElementById('Minutos')
const segundos = document.getElementById('Segundos')

const relogio = setInterval(function tempo(){
    let diaHoje = new Date()
    let hr = diaHoje.getHours()
    let min = diaHoje.getMinutes()
    let seg = diaHoje.getSeconds()
    
    if(hr < 10) hr = '0'+hr
    if(min < 10) min = '0'+min
    if(seg < 10) seg = '0'+seg

    horas.textContent = hr
    minutos.textContent = min
    segundos.textContent = seg
  }
)