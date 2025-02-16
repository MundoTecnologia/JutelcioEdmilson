<?php
session_start();
include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    try {
        // Buscar cliente pelo e-mail
        $stmt = $conn->prepare("SELECT * FROM clientes c INNER JOIN Contactos ct ON c.contactos_id = ct.id WHERE ct.email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $utilizador = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$utilizador) {
            echo "<script>alert('Utilizador nao encontrado')</script>";
            return;
        }

        // Verificar a senha
        if (password_verify($senha, $utilizador['senha'])) {
            // Criar sessão
            $_SESSION['cliente_id'] = $utilizador['id'];
            $_SESSION['cliente_nome'] = $utilizador['nome'];

            header("Location: ../inicio/index.php");
            exit();
        } 

        if (!password_verify($senha, $utilizador["senha"])) {
            echo "<script>alert('Email ou senha invalido')</script>";
            header("Location: ../Cadastro/Login/Cliente/loginCliente.php");
        }

    } catch (Exception $e) {
        echo "Erro ao efetuar login: " . $e->getMessage();
    }
}
?>