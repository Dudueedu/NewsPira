<?php
require_once 'conecta.php'; 
session_start();
$nome = $_SESSION['nome'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $titulo = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $imagem = "./imagens_banco/".$_FILES['imagem']["name"];
    $texto = $_POST['texto'];
}

if(isset($_FILES["imagem"]) && !empty($_FILES)){
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
}

$sql = "INSERT INTO news (titulo, noticia, imagem, resumo, autor) 
        VALUES ('$titulo', '$texto', '$imagem', '$resumo', '$nome')";

if ($conn->query($sql) === TRUE) {
    echo "Notícia inserida com sucesso!";
    header('Location: noticias.php');
} else {
    echo "Erro ao inserir notícia: " . $conn->error;
    header('Location: crianot.php');
}

$conn->close();
?>