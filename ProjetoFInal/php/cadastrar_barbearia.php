<?php
include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
    $provincia = $_POST["provincia"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $nome_imagem = $_FILES["imagem"]["name"];
    $descricao = $_POST["descricao"];

    try {
        $conn->beginTransaction();

        // Inserir contacto
        $contacto = $conn->prepare("INSERT INTO Contactos (telefone, email) VALUES (:telefone, :email)");
        $contacto->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $contacto->bindParam(":email", $email, PDO::PARAM_STR);
        $contacto->execute();
        $contactos_id = $conn->lastInsertId();

        // Upload da imagem
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($nome_imagem);
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

        // Inserir localização
        $localizacoes = $conn->prepare("INSERT INTO localizacoes (Provincia, Bairro, Rua) VALUES (:Provincia, :Bairro, :Rua)");
        $localizacoes->bindParam(":Provincia", $provincia, PDO::PARAM_STR);
        $localizacoes->bindParam(":Bairro", $bairro, PDO::PARAM_STR);
        $localizacoes->bindParam(":Rua", $rua, PDO::PARAM_STR);
        $localizacoes->execute();
        $localizacoes_id = $conn->lastInsertId();

        // Inserir barbearia
        $barbearia = $conn->prepare("INSERT INTO barbearias (nome,localizacoes_id,contactos_id,descricao, imagem, senha) VALUES (:nome, :localizacoes_id, :contactos_id, :descricao, :imagem, :senha)");
        $barbearia->bindParam(":nome", $nome, PDO::PARAM_STR);
        $barbearia->bindParam(":localizacoes_id", $localizacoes_id, PDO::PARAM_INT);
        $barbearia->bindParam(":contactos_id", $contactos_id, PDO::PARAM_INT);
        $barbearia->bindParam(":descricao", $descricao, PDO::PARAM_STR);
        $barbearia->bindParam(":imagem", $nome_imagem, PDO::PARAM_STR);
        $barbearia->bindParam(":senha", $senha, PDO::PARAM_STR);
        $barbearia->execute();

        $conn->commit();
        echo "Barbearia criada com sucesso!";

        header("Location: ../Cadastro/Login/Barbearia/loginBarbearia.php");
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Erro ao criar barbearia: " . $e->getMessage();
    }
}
?>
