<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Cadastro - Barbearia Virtual</title>
    <link rel="stylesheet" href="inicio-css.css">
</head>
<body>
    <div id="Principal">
        <div id="Seccao1">
            <section>
                <h1>Bem-Vindo!</h1>
                <p>Escolha o tipo de cadastro que melhor se adequa a você</p>
            </section>
        </div>
        <div id="Seccao2">
            <div class="opcoes-cadastro">
                <div class="opcao" id="opcao-cliente">
                    <h2>Cadastro de Cliente</h2>
                    <p>Agende seus cortes, explore serviços e encontre as melhores barbearias</p>
                    <button onclick="navegarPara('cliente')">Cadastrar como Cliente</button>
                </div>
                <div class="opcao" id="opcao-admin">
                    <h2>Cadastro de Barbearia</h2>
                    <p>Gerencie sua barbearia, serviços e clientes em uma plataforma completa</p>
                    <button onclick="navegarPara('admin')">Cadastrar como Admi-barbearia</button>
                </div>
            </div>
        </div>
    </div>
    <script src="inicio-js.js" defer></script>
</body>
</html>
