<?php
include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $password = password_hash($_POST["senha"],PASSWORD_DEFAULT);

    try {
        $conn->beginTransaction();

        // Inserir contacto
        $contacto = $conn->prepare("INSERT INTO Contactos (telefone, email) VALUES (:telefone, :email)");
        $contacto->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $contacto->bindParam(":email", $email, PDO::PARAM_STR);
        $contacto->execute();
        $contactos_id = $conn->lastInsertId();

        // Inserir cliente
        $clientes = $conn->prepare("INSERT INTO clientes (Nome, contactos_id,senha) VALUES (:Nome, :contactos_id,:senha)");
        $clientes->bindParam(":Nome", $nome, PDO::PARAM_STR);
        $clientes->bindParam(":contactos_id", $contactos_id, PDO::PARAM_INT); // Corrigido aqui!
        $clientes->bindParam(":senha", $password, PDO::PARAM_STR);
        $clientes->execute();

        $conn->commit();
        
        // Redirecionamento correto
        header("Location: ../Cadastro/Login/Cliente/loginCliente.php");
        exit();
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Erro ao criar conta: " . $e->getMessage();
    }
}
?>