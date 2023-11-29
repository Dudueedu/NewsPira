<?php
require_once 'conecta.php'; 
session_start();
$nome = $_SESSION['nome'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = "./imagens_banco/".$_FILES['imagem']["name"];
    $link = $_POST['link'];
    $empresa = $_POST['empresa'];
}

if(isset($_FILES["imagem"]) && !empty($_FILES)){
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
}

$sql = "INSERT INTO classificados (titulo, descrição, imagem, link, empresa) 
        VALUES ('$titulo', '$descricao', '$imagem', '$link', '$empresa')";

if ($conn->query($sql) === TRUE) {
    
    echo "Classificado inserido com sucesso!";
    header('Location: classificados.php');
} else {
    echo "Erro ao inserir classificado: " . $conn->error;
    header('Location: criaemprego.php');
}

$conn->close();
?>