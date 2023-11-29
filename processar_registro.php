<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        if(!empty($email) && (!empty($senha))){
            require_once 'conecta.php';

            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = $conn->query($sql);

            if($result->num_rows === 1){
                header("Location: esqueci_senha.php");
                exit();
            }
            $sql = "insert into usuarios (email,nome,senha) values('$email','$nome','$senha')";
            if($conn->query($sql)=== TRUE){
                echo "registro realizado com sucesso";
                header('Refresh: 3; URL=login.php');
                echo "<p> voce sera redirecionado para a pagina de login</p>";
                exit();
            }else{
                echo "Erro ao cadastrar" . $conn->error;
            }
            $conn->close();
        }else{
            header("Location: registrar.php");
            exit();
        }
    }

?>