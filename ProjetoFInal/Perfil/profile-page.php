<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Cliente</title>
    <link rel="stylesheet" href="profile-styles.css">
</head>
<body>
    <header>
        <section id="Cabecalho1">
            <img src="../imagens/logo.png" alt="">
            <h1>Barbearia<span>Virtual</span></h1>
        </section>
        <section id="Cabecalho2">
            <a href="../inicio/index.html" class="cor">Inicio</a>
            <a href="../sevicos/sevicos.html" class="cor">Serviços</a>
            <a href="../sobre/sobre.html" class="cor">Sobre</a>
        </section>
        <section id="Cabecalho3">
            <a href="#" id="Cor">Meu Perfil</a>
        </section>
    </header>

    <main>
        <div class="profile-container">
            <section class="profile-info">
                <div class="profile-image">
                    <img id="userImage" src="../imagens/default-profile.png" alt="Foto de Perfil">
                    <button onclick="changeProfileImage()">Alterar Foto</button>
                </div>
                <div class="profile-details">
                    <h2 id="userName">Nome do Cliente</h2>
                    <p id="userEmail">cliente@email.com</p>
                </div>
            </section>

            <section class="services-history">
                <h2>Histórico de Serviços</h2>
                <div id="servicesList" class="services-list">
                    <!-- Services will be added here by JavaScript -->
                </div>
            </section>
        </div>
    </main>

    <script src="profile-script.js"></script>
</body>
</html>
