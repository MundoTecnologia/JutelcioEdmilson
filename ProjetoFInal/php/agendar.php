<?php 
    include_once("../php/db.php");  
    session_start();

    // Ativar a exibição de erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!isset($_POST["data"], $_POST["servico_id"], $_POST["barbearia_id"], $_SESSION["cliente_id"])) {
            die("Erro: Dados incompletos.");
        }

        $data = $_POST["data"];
        $servico_id = $_POST["servico_id"];
        $barbearia_id = $_POST["barbearia_id"];
        $cliente_id = $_SESSION["cliente_id"];

        if (empty($data)) {
            die("Erro: A data é obrigatória.");
        }
        

        try {
            // Inserir nova marcação no banco de dados
            $stmt = $conn->prepare("INSERT INTO macacoes (status, data, servico_id, barbearias_id, cliente_id) VALUES (default, :data, :servico_id, :barbearia_id, :cliente_id)
            ");

            // Vincular os parâmetros
            $data_formatada = date("Y-m-d H:i:s", strtotime($data));
            $stmt->bindParam(":data", $data_formatada);
            $stmt->bindParam(":servico_id", $servico_id, PDO::PARAM_INT);
            $stmt->bindParam(":barbearia_id", $barbearia_id, PDO::PARAM_INT);
            $stmt->bindParam(":cliente_id", $cliente_id, PDO::PARAM_INT);

            $done = $stmt->execute();
            var_dump($done);

            if ($done) {
                echo "<script>alert('Marcação realizada com sucesso!'); window.location.href = '../Barbearia/barbearias.php?id=$barbearia_id';</script>";
            } else {
                echo "<script>alert('Erro ao realizar marcação.'); window.history.back();</script>";
            }

        } catch (Exception $e) {
            echo "<script>alert('Erro ao marcar: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    }
?>
