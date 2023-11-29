<?php
require_once 'conecta.php'; 
session_start();
$nome = $_SESSION['nome'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = "./imagens_banco/".$_FILES['imagem']["name"];
    $link = $_POST['link'];
    $produtora = $_POST['produtora'];
}

if(isset($_FILES["imagem"]) && !empty($_FILES)){
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
}

$sql = "INSERT INTO filmes (titulo, descrição, imagem, link, produtora) 
        VALUES ('$titulo', '$descricao', '$imagem', '$link', '$produtora')";

if ($conn->query($sql) === TRUE) {
    echo "Filme inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir Filme: " . $conn->error;
    header('Location: criafilme.php');
}

$conn->close();
?>