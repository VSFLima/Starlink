<?php

require_once 'db_connection.php';


function getAccessCount() {
   
    $conn = getConnection();

    
    $sql = "SELECT COUNT(*) as total_acessos FROM acessos";

    
    $result = $conn->query($sql);

    
    if ($result && $result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $totalAcessos = $row['total_acessos'];

       
        return $totalAcessos;
    } else {
      
        return 0;
    }

   

}


$totalAcessos = getAccessCount();


echo $totalAcessos;
?>
