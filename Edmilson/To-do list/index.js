document.querySelector('#Inserir').onclick = 
    function(){
        if(document.querySelector('#Novo-conteiner input').value.length == 0){
           alert('Por favor insira um nome para continuar')
        }else{
            document.querySelector('#Visualizar').innerHTML +=`<div class= "ver">
            <span id = "Ver-nome">
            ${document.querySelector("#Novo-conteiner input").value}</span>
            <button class = "apagar">X</button>
            </div>`;

            var pegar = document.querySelectorAll('.apagar');

            for (var i = 0; i < pegar.length; i++) {
                pegar[i].onclick = function(){
                    this.parentNode.remove()
                };
                
            }
            
            var pegarNome = document.querySelectorAll('#Ver-nome')

            for (var i = 0; i < pegarNome.length; i++) {
                pegarNome[i].onclick = function(){
                    this.classList.toggle('completo');
                }
                
            }

            document.querySelector('#Novo-conteiner input').value="";
             
        }
    }