<?php

if (!function_exists('getConnection')) {
    function getConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elon";

     
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>