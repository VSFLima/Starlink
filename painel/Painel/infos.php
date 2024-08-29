<?php

require_once 'db_connection.php';


function getinfos() {
    
    $conn = getConnection();

    
    $sql = "SELECT COUNT(*) as total_registros FROM dados_cartao";

   
    $result = $conn->query($sql);

    
    if ($result && $result->num_rows > 0) {
      
        $row = $result->fetch_assoc();
        $totalRegistros = $row['total_registros'];

      
        return $totalRegistros;
    } else {
      
        return 0;
    }

    
   
}


$totalRegistros = getinfos();


echo $totalRegistros;
?>
