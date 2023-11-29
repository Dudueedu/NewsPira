<?php
require_once 'conecta.php'; 
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST["assunto"]) && isset($_POST["reclama"]) && isset($_POST["email"]) && isset($_POST["nome"])) {
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $assunto = $_POST["assunto"];
        $reclama = $_POST["reclama"];}
}

$sql = "INSERT INTO contato (nome, email, assunto, reclamação) 
        VALUES ('$nome', '$email','$assunto', '$reclama')";

if ($conn->query($sql) === TRUE) {
    echo "Perfeito! Em breve entramos em contato!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir comentario: " . $conn->error;
    header('Location: contato.php');
}

$conn->close();
?>

