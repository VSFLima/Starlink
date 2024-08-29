<?php

session_start(); 

require_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $conn = getConnection();

 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: adm.php");
        exit;
    } else {
        $error = "Usuário ou Senha Inválidos";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <img src="assets/img/fundo.jpg" alt="image" class="login__bg">

        <form action="" method="post" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
                <div class="login__box">
                    <input type="text" name="username" placeholder="Usuário" class="login__input">
                    <i class="ri-user-line"></i>
                </div>

                <div class="login__box">
                    <input type="password" name="password" placeholder="Senha" class="login__input">
                    <i class="ri-lock-2-fill"></i>
                </div>
            </div>

            <?php if (isset($error)) : ?>
                <div style="text-align: center;" class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <button type="submit" class="login__button">Login</button>
        </form>
    </div>

    <script>
      
        function displayErrorMessage() {
            const errorMessage = document.querySelector('.error');
            if (errorMessage) {
                errorMessage.style.display = 'block';

              
                setTimeout(() => {
                    errorMessage.style.display = 'none';
                }, 2000);
            }
        }

       
        window.onload = displayErrorMessage;
    </script>
</body>

</html>