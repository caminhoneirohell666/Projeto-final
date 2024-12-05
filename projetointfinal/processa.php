<?php
session_start();
include 'db.php';
$mensagem_insc = "";
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_enviar'])){
// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['datanascimento'];
$genero = $_POST['genero'];

// Insere os dados na tabela

$sql = "INSERT INTO usuario (nome, email, senha, nasc, gen) VALUES ('$nome', '$email', '$senha', '$nascimento', '$genero')";

if (mysqli_query($con, $sql)) {
    $mensagem_insc = "Sua inscrição foi realizada com sucesso!";
    // echo "cheguei aqui";
    header("Location:login.php");
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
}

// Fecha a conexão
mysqli_close($con);
}
else {
    // echo "<br>Nenhum dado enviado";
}
?>