 <?php

   $hostname = "localhost";
   $dbname = "db_barbearia";
   $username = "root";
   $password = "";

   try {
      $conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Erro na conexão: " . $e->getMessage());
  }
  ?>
