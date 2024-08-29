CREATE TABLE dados_cartao (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero_do_cartao VARCHAR(16) NOT NULL,
    nome_titular VARCHAR(255) NOT NULL,
    validade VARCHAR(7) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    cpf_titular VARCHAR(14) NOT NULL
);
