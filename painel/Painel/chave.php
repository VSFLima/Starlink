<?php
include 'db_connection.php';
require '../phpqrcode/qrlib.php'; 

if (isset($_POST['chave'])) {
    $chave = $_POST['chave'];

    $conn = getConnection();

    if ($conn) {
        
        $conn->query("TRUNCATE TABLE pix");

        $tempDir = 'temp/'; 
        if (!file_exists($tempDir)) {
            mkdir($tempDir);
        }
        
        $qrCodeFile = $tempDir . 'qrcode.png'; 
        
        QRcode::png($chave, $qrCodeFile, QR_ECLEVEL_L, 5);

       
        $stmt = $conn->prepare("INSERT INTO pix (chave, qrcode) VALUES (?, ?)");
        $stmt->bind_param("ss", $chave, $qrCodeFile);
        $result = $stmt->execute();

        if ($result) {
            echo '<div class="alert alert-success">Chave Pix cadastrada com sucesso!</div>';
        } else {
            echo '<div class="alert alert-danger">Erro ao cadastrar a Chave Pix.</div>';
        }

        $stmt->close();
        $conn->close();
    } else {
        echo '<div class="alert alert-danger">Erro na conexão com o banco de dados.</div>';
    }
} else {
    echo '<div class="alert alert-danger">Nenhuma chave foi recebida.</div>';
}
?>
