<?php
    require_once 'conecta.php';  

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(!empty($email) && (!empty($senha))){
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = $conn->query($sql);

            if($result->num_rows === 1){
                    $row = $result->fetch_assoc(); 
                    $password = $row['senha'];
                    $nomes = $row['nome'];
                    $moderator = $row['moderator'];
                    $publisher = $row['publisher'];
                    echo $password;

                    if($senha === $password){
                        session_start();
                        $_SESSION['usuarios'] = $email;
                        $_SESSION['nome'] = $nomes;
                        $_SESSION['moderator'] = $moderator;
                        $_SESSION['publisher'] = $publisher;
                        $_SESSION['logged_in'] = true;
                        header('Location: painel.php');
                        exit();
                    }else{
                        $error = 'Senha invalida';
                    }
            }else{
                $senha = 'Email não encontrado';
            }
        }else{
            $error = 'Por favor, preencha os campos';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<header>
        
        <ul>
            <a href="index.php">Home</a>
            <li><a href="noticias.php">Notícias</a></li>
            <li><a href="classificados.php">Classificados</a></li>
            <a href="contato.php">Contato</a>
            <a href="login.php">Login</a>
        </ul>
        
    </header>
    <h1>LOGIN INVALIDO</h1>
    <?php if(isset($error)): ?>

    <p>
        <?php
        if($error === 'Senha invalida'){
            echo '<h2>' . $error . '</h2>';
        } elseif($error === 'Email não encontrado'){
            echo '<h2>' . $error . '</h2>';
        }else{
            echo $error;
        }
        ?>
    </p>
    <?php endif; ?>

    <?php 
        if(isset($error)){
            header('Refresh: 3; URL=login.php');
            echo '<p> Voce sera redirecionado para o login </p>';
            exit();
        }
    ?>
<footer>
        <h3>Nos Conheça</h3>
        <p>O objetivo principal do site "PiraNews" é fornecer aos seus leitores informações atualizadas, confiáveis e relevantes sobre os acontecimentos locais, buscamos ser a principal fonte de notícias para a comunidade, abrangendo uma variedade de tópicos, incluindo política, economia, cultura, esportes, ciência e tecnologia, entre outros.</p>
    </footer>
</body>
</html>