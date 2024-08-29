<?php
function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elon";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    return $conn;
}
?>
