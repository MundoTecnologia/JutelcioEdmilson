<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div id="Principal">
        <div id="Seccao2">
        <form action="../../../php/login_barbearia.php" method = "post">
                <section id="Sub-form">
                    <h1>Entrar</h1>
                    <p>É sempre um prazer recebelo novamente</p>
                </section>
                <input type="email" name="email" required placeholder="E-mail">
                <input type="password" name="senha" required placeholder="Senha">
                <input type="submit" value="Entrar" id="Diferente">
            </form>
        </div>
        <div id="Seccao1">
            <section>
                <h1>Seja bem-vido ao BarbearioVirtual!</h1>
                <p>Insira os seus dados para ter acesso ao gerenciamento da sua barbearia</p>
            </section>
            <button><a href="../../Criar conta/Barbearia/adminBarbearia-registration.php">Criar Conta</a></button>
        </div>
    </div>

</body>
</html>