<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div id="Principal">
        <div id="Seccao1">
            <section>
                <h1>Bem-Vindo de Volta!</h1>
                <p>Insira seus dados pessoais para aproveitar os recursos do nosso portal de barbearias</p>
            </section>
            <button><a href="../../Login/Cliente/loginCliente.php">Entrar</a></button>
        </div>
        <div id="Seccao2">
            <form action="../../../php/cadastrar_cliente.php" method = "post" >
                <section id="Sub-form">
                    <h1>Criar Conta</h1>
                    <p>Seja mais um de nós</p>
                </section>
                <input type="text" name="nome" id="" required placeholder="Nome do Usuario">
                <input type="tel" name="telefone" id="" required placeholder="Telefone">
                <input type="email" name="email" id="" required placeholder="E-mail">
                <input type="password" name="senha" id="" required placeholder="Senha">
                <input type="submit" value="Criar Conta" id="Diferente">
            </form>
        </div>
    </div>
</body>
</html>