<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    header("Location: login.php");
    exit;
}

$login_usuario_id = $_SESSION['id'];
$login_nome = $_SESSION['nome'];
$login_email = $_SESSION['email'];
?>
