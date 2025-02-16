// Dados mockados para exemplo
const userData = {
    name: "João Silva",
    email: "joao.silva@email.com",
    image: "../imagens/default-profile.png"
};

const servicesHistory = [
    {
        id: 1,
        service: "Corte de Cabelo",
        barbershop: "Barbearia do João",
        date: "2024-02-08",
        time: "14:30",
        status: "completed",
        price: "R$ 45,00"
    },
    {
        id: 2,
        service: "Barba",
        barbershop: "Barbearia do João",
        date: "2024-02-15",
        time: "16:00",
        status: "scheduled",
        price: "R$ 35,00"
    }
];

// Carregar dados do usuário
function loadUserData() {
    document.getElementById('userName').textContent = userData.name;
    document.getElementById('userEmail').textContent = userData.email;
    document.getElementById('userImage').src = userData.image;
}

// Carregar histórico de serviços
function loadServicesHistory() {
    const servicesList = document.getElementById('servicesList');
    servicesList.innerHTML = '';

    servicesHistory.forEach(service => {
        const serviceCard = document.createElement('div');
        serviceCard.className = 'service-card';
        
        const statusText = service.status === 'completed' ? 'Concluído' : 'Agendado';
        const statusClass = service.status === 'completed' ? 'status-completed' : 'status-scheduled';

        serviceCard.innerHTML = `
            <h3>${service.service}</h3>
            <p><strong>Barbearia:</strong> ${service.barbershop}</p>
            <p><strong>Data:</strong> ${formatDate(service.date)}</p>
            <p><strong>Horário:</strong> ${service.time}</p>
            <p><strong>Valor:</strong> ${service.price}</p>
            <span class="service-status ${statusClass}">${statusText}</span>
        `;

        servicesList.appendChild(serviceCard);
    });
}

// Formatar data para padrão brasileiro
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('pt-BR');
}

// Função para mudar a imagem de perfil
function changeProfileImage() {
    // Simulando um input de arquivo
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';

    input.onchange = function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('userImage').src = event.target.result;
                userData.image = event.target.result;
                // Aqui você poderia implementar o upload da imagem para um servidor
            };
            reader.readAsDataURL(file);
        }
    };

    input.click();
}

// Inicializar a página
window.onload = function() {
    loadUserData();
    loadServicesHistory();
};
