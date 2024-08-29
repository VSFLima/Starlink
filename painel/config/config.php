<?php
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=elon;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
    exit;
}
?>

