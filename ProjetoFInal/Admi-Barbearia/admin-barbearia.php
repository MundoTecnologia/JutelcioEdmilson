<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração da Barbearia</title>
    <link rel="stylesheet" href="admin-barbearia.css">
</head>
<body>
    <header>
        <section id="Cabecalho1">
            <img src="../imagens/logo.png" alt="">
            <h1>Barbearia<span>Virtual</span></h1>
        </section>
        <section id="Cabecalho3">
            <a href="#sair">Sair</a>
        </section>
    </header>

    <main id="dashboard">
        <section class="resumo-cards">
            <div class="card">
                <h3>Agendamentos Hoje</h3>
                <p class="numero-grande">0</p>
            </div>
            <div class="card">
                <h3>Clientes Atendidos</h3>
                <p class="numero-grande">0</p>
            </div>
            <div class="card">
                <h3>Avaliação Média</h3>
                <p class="numero-grande">0</p>
            </div>
        </section>

        <section class="graficos">
            <div class="grafico" id="graficoAgendamentos">
                <h3>Agendamentos por Serviço</h3>
                <div id="graficoAgendamentosContainer"></div>
            </div>
        </section>

        <section class="ultimos-agendamentos">
            <h3>Últimos Agendamentos</h3>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>João Silva</td>
                        <td>Corte Masculino</td>
                        <td>15/02/2025</td>
                        <td>14:30</td>
                        <td><span class="status confirmado" onclick="avaliar()">Confirmado</span> <span><span class="status pendente">Pendente</span></span></td>
                    </tr>
                    <tr>
                        <td>Maria Souza</td>
                        <td>Barba</td>
                        <td>15/02/2025</td>
                        <td>15:00</td>
                        <td><span class="status confirmado" onclick="avaliar()">Confirmado</span> <span class="status pendente" >Pendente</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <script src="admin-barbearia.js" defer></script>
</body>
</html>