<?php

// MySQL Connection
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "db_gerenciador_de_tarefas";

//PostgreSQL Connection
$hostname = "localhost";
$database = "db_gerenciador_de_tarefas";
$username = "postgres";
$password = "admin@";

// Create a new PDO instance
try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro de Conexão: " . $e->getMessage();
}

?>