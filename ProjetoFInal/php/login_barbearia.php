<?php
session_start();
include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    try {
        // Buscar cliente pelo e-mail
        $stmt = $conn->prepare("SELECT * FROM barbearias b INNER JOIN Contactos ct ON b.contactos_id = ct.id WHERE ct.email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $utilizador = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$utilizador) {
            echo "<script>alert('Utilizador nao encontrado')</script>";
            return;
        }

        var_dump($utilizador);

        // Verificar a senha
        if (password_verify($senha, $utilizador['senha'])) {
            // Criar sessão
            $_SESSION['barberia_id'] = $utilizador['id'];
            $_SESSION['barbearia_nome'] = $utilizador['nome'];

            header("Location: ../Admi-Barbearia/admin-barbearia.php");
            exit();
        }
        
        if (!password_verify($senha, $utilizador["senha"])) {
            echo "<script>alert('Senha invalido')</script>";
            header("Location: ../Cadastro/Login/Barbearia/loginBarbearia.php");
            return;
        }

    } catch (Exception $e) {
        echo "Erro ao efetuar login: " . $e->getMessage();
    }
}
?>