document.addEventListener('DOMContentLoaded', function() {

    // Gráfico de Agendamentos por Serviço (simulado)
    const agendamentosPorServico = {
        labels: ['Corte Masculino', 'Barba', 'Sobrancelha', 'Outros'],
        datasets: [{
            label: 'Agendamentos',
            data: [45, 25, 15, 15],
            backgroundColor: [
                'rgba(8, 8, 160, 0.6)',
                'rgba(8, 8, 160, 0.4)',
                'rgba(8, 8, 160, 0.2)',
                'rgba(8, 8, 160, 0.1)'
            ]
        }]
    };

    // Função para renderizar gráficos (seria substituída por uma biblioteca real em produção)
    function renderizarGrafico(containerId, dados) {
        const container = document.getElementById(containerId);
        container.innerHTML = `
            <div style="width: 100%; height: 250px; display: flex; justify-content: center; align-items: center;">
                Gráfico Simulado: ${dados.labels.join(', ')}
            </div>
        `;
    }

    // Renderizar gráficos simulados
    renderizarGrafico('graficoAgendamentosContainer', agendamentosPorServico);

});