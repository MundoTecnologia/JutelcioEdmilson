<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['cliente_id'])) {
    header("Location: ../Login/Cliente/loginCliente.php");
    return;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <header>
        <section id="Cabecalho1">
            <img src="../imagens/logo.png" alt="">
            <h1>Barbearia<span>Virtual</span></h1>
        </section>
        <section id="Cabecalho2">
            <a href="#" id="Cor">Inicio</a>
            <a href="../sevicos/sevicos.php" class="cor">Serviços</a>
            <a href="../sobre/sobre.php" class="cor">Sobre</a>
        </section>
        <section id="Cabecalho3">
            <?php 
                if (!isset($_SESSION['cliente_id'])) {
            ?>
                <a href="../Escolha/inicio-html.php">Criar Conta</a>
            <?php } ?>
            <?php 
                if (isset($_SESSION['cliente_id'])) {
            ?>
                <p><?php echo $_SESSION["cliente_nome"]  ?></p>     
            <?php } ?>    
        </section>
    </header>
    <main>
        <div id="Conteudo">
            <h1>Babearia<span>Virtual</span></h1>
            <p>
               Transforme o seu visual com estilo e elegância venha nos visitar e decubra nossos serviços de qualidade,onde cada corte é uma obra-prima
            </p>
            <a href="../Agendar/agendar.php">Agendamento</a>
        </div>
        <div id="Imagem">
            <img id="Imagem1" src="../imagens/barbershop-amico.png" alt="">
        </div>
    </main>
</body>
</html>