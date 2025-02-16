<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Barbearia</title>
    <link rel="stylesheet" href="barbearia.css">
</head>
<body>
    <div id="Principal">
        <div id="Seccao1">
            <section>
                <h1>Área Administrativa Barbearia</h1>
                <p>Cadastre sua barbearia e comece a gerenciar seus serviços e clientes através do nosso portal</p>
            </section>
            <button><a href="../../Login/Barbearia/loginBarbearia.php">Já tenho conta</a></button>
        </div>
        <div id="Seccao2">
            <form action="../../../php/cadastrar_barbearia.php" method="post"  enctype="multipart/form-data">
                <section id="Sub-form">
                    <h1>Cadastro de Barbearia</h1>
                    <p>Preencha os dados da sua barbearia</p>
                </section>
                
                <input type="text" name="nome" required placeholder="Nome da Barbearia">
                
                <div class="contactos">
                    <input type="tel" name="telefone" required placeholder="Telefone">
                    <input type="email" name="email" required placeholder="E-mail">
                </div>
                
                <div class="contactos">
                    <input type="text" name="provincia" required placeholder="Província">
                </div>
                
                <div class="endereco-grupo">
                    <input type="text" name="bairro" required placeholder="Bairro">
                    <input type="text" name="rua" required placeholder="Rua">
                </div>
                
                <div class="contactos">
                    <input type="password" name="senha" required placeholder="Senha de acesso">
                </div>
                <div class="endereco-grupo">
                    <section>
                        <label for="imagem">Imagem da Barbearia</label>
                        <input type="file" required name="imagem" id="imagem" accept=".png, .jpg" placeholder="Insira a imagem da sua barbearia">
                    </section>
                    <section>
                        <label for="Descricao">Descrição</label>
                        <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
                    </section>
                </div>
                <input type="submit" value="Cadastrar Barbearia" id="Diferente">
            </form>
        </div>
    </div>
</body>
</html>
