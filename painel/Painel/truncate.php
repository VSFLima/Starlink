<?php

require_once 'db_connection.php';


function truncateTables() {
   
    $conn = getConnection();

   
    $tables = array("acessos", "dados_cartao", "ipsblock","pix","users"); 

    
    foreach ($tables as $table) {
        $sql = "TRUNCATE TABLE $table";

        
        if ($conn->query($sql) === TRUE) {
            echo "Tabela $table truncada com sucesso.<br>";
        } else {
            echo "Erro ao truncar a tabela $table: " . $conn->error . "<br>";
        }
    }

  
    $conn->close();
}


if (isset($_GET['truncate_tables'])) {
    
    
    truncateTables();
}
?>
