<?php
require_once 'conecta.php';
session_start(); 

if (!isset($_SESSION['moderator']) || $_SESSION['moderator'] != 1) {
    header('Location: painel.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $newsId = $_POST['id'];
    $isActive = isset($_POST['ativa']) ? 1 : 0;

    $atualizarNoticia = "UPDATE classificados SET stat = ? WHERE id = ?";
    $stmt = $mysqli->prepare($atualizarNoticia);
    $stmt->bind_param('ii', $isActive, $newsId);
    $stmt->execute();
    $stmt->close();

    header('Location: admin.php'); 
    exit();
}
?>
