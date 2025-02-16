<?php 
    include_once("../php/db.php");  

    // Verifica se o ID foi passado corretamente na URL
    if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
        die("ID inválido");
    }

    $id = (int) $_GET["id"]; // Garante que é um número inteiro

    // Prepara e executa a consulta
    $stm = $conn->prepare("SELECT * FROM barbearias b WHERE b.id = :id");
    $stm->bindParam(":id", $id, PDO::PARAM_INT);
    $stm->execute();
    $barbearia = $stm->fetch(PDO::FETCH_ASSOC);

    // Verifica se encontrou o registro
    if (!$barbearia) {
        echo "<script>alert('Barbearia não encontrada');</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div>
        <img style="width: 100%; height: 100%;" class="imgem" src="../uploads/<?php echo htmlspecialchars($barbearia["imagem"]) ?>" alt="">
    </div>
    <section>
        <h1><?php echo htmlspecialchars($barbearia["nome"]) ?></h1>
        <p><?php echo htmlspecialchars($barbearia["descricao"]) ?></p>
    </section>

    <form action="../php/agendar.php" method="post">    
        <label for="">Serviço</label>
        <select name="servico_id" required>
            <option value="">Selecionar serviço</option>
            <?php 
                $sql = $conn->prepare("SELECT * FROM servicos");
                $sql->execute();
                $servicos = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($servicos as $servico) {
            ?>
                <option value="<?php echo htmlspecialchars($servico["id"]) ?>">
                    <?php echo htmlspecialchars($servico["descricao"]) ?>
                </option>
            <?php } ?>
        </select>

        <label for="">Selecione uma data</label>
        <input type="datetime-local" name="data" required>

        <input type="hidden" name="barbearia_id" value="<?php echo htmlspecialchars($barbearia["id"]) ?>">

        <button type="submit">Agendar</button>
    </form>
</body>
</html>
