<?php


include 'db_connection.php';


if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha']; 

    $conn = getConnection();

    
    if ($conn) {
       
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

        if ($stmt) {
       
            $stmt->bind_param("ss", $usuario, $senha);
            $result = $stmt->execute();

            if ($result) {
                echo '<div class="alert alert-success">Usuário Alterado com Sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger">Erro ao Alterar Usuário.</div>';
            }

           
            $stmt->close();
        } else {
            echo '<div class="alert alert-danger">Erro ao preparar a consulta.</div>';
        }

       
        $conn->close();
    } else {
        echo '<div class="alert alert-danger">Erro na conexão com o banco de dados.</div>';
    }
} else {
    echo '<div class="alert alert-danger">Nenhum usuário ou senha foi recebido.</div>';
}
?>
