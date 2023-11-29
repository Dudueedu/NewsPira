<?php
require_once 'conecta.php';
session_start(); 

if (!isset($_SESSION['moderator']) || $_SESSION['moderator'] != 1) {
    header('Location: painel.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $userId = $_POST['id'];
    $isPublisher = isset($_POST['publisher']) ? 1 : 0;
    $isModerator = isset($_POST['moderator']) ? 1 : 0;

    // Atualizar o usuário no banco de dados
    $atualizarUsuario = "UPDATE usuarios SET publisher = ?, moderator = ? WHERE id = ?";
    $stmt = $mysqli->prepare($atualizarUsuario);
    $stmt->bind_param('iii', $isPublisher, $isModerator, $userId);
    $stmt->execute();
    $stmt->close();

    header('Location: admin.php'); 
    exit();
}
?>
