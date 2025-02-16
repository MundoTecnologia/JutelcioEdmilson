function navegarPara(tipo) {
    switch(tipo) {
        case 'cliente':
            window.location.href = '../Criar conta/Cliente/cliente.php';
            break;
        case 'admin':
            window.location.href = '../Criar conta/Barbearia/adminBarbearia-registration.php';
            break;
        default:
            console.error('Tipo de navegação inválido');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const opcoes = document.querySelectorAll('.opcao');
    
    opcoes.forEach(opcao => {
        opcao.addEventListener('mouseenter', () => {
            opcao.style.transform = 'scale(1.05)';
        });
        
        opcao.addEventListener('mouseleave', () => {
            opcao.style.transform = 'scale(1)';
        });
    });
});
