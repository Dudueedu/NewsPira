<?php
    $host = 'localhost'; //ou endereço do banco de dados
    $username = 'root';
    $password = '';
    $database = 'piranews';

    //estabelecer conecxão

    $conn = new mysqli($host,$username,$password,$database);
    $mysqli = mysqli_connect ($host,$username,$password,$database);

    //verificar
    if($conn -> connect_error){
        die('erro na conexão com banco de dados'. $conn->connect_error);
    }
    // echo 'conexão bem sucedida';
?>