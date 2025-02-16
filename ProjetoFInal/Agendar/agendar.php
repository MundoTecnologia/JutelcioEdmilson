<?php
    include_once("../php/db.php");  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearias Disponíveis</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color:rgb(1, 1, 22);

        }

        #Titulo {
            font-size: 2rem;
            margin: 20px 0;
        }

        #Principal {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            gap: 20px;
            padding: 15px;
            max-width: 90%;
            height: 100%;
            margin: auto;
        }

        .barbearia {
            box-shadow: 2px 2px 2px 5px black; 
            background-color: rgb(6, 6, 122);
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            height: 50%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .barbearia:hover {
            transform: scale(1.05);
        }

        .barbearia img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #ffcc00;
        }

        .barbearia h1 {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .barbearia a {
            display: inline-block;
            margin: 10px;
            padding: 8px 15px;
            background-color:  rgb(7, 7, 236);
            cursor: pointer;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 id="Titulo">Barbearias Disponíveis</h1>

    <div id="Principal">
        <?php
            $stm = $conn->prepare("SELECT id, nome, imagem FROM barbearias");
            $stm->execute();
            $barbearias = $stm->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <?php if (!empty($barbearias)) { ?>
            <?php foreach ($barbearias as $barbearia) { ?>
                <section class="barbearia">
                    <img src="../uploads/<?php echo htmlspecialchars($barbearia["imagem"]); ?>" alt="Imagem da Barbearia">
                    <h1><?php echo htmlspecialchars($barbearia["nome"]); ?></h1>
                    <a href="../Barbearia/barbearias.php?id=<?php echo htmlspecialchars($barbearia["id"]); ?>">Visitar</a>
                </section>
            <?php } ?>
        <?php } else { ?>
            <section class="barbearia">
                <p style="color: white;">Nenhuma barbearia disponível</p>
            </section>
        <?php } ?>
    </div>
</body>
</html>
