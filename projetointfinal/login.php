<?php
$aviso = isset($_GET['mensagem']) ? urldecode($_GET['mensagem']) : "";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgroTech Insight</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>AgroTech Insight</h1>
        <p class="tagline">Sua porta de entrada para o futuro do campo!</p>
        <form action="processa_login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <button type="submit" name="btn_entrar" id="btn_entrar">Entrar</button>
            <br>
            <?php if (!empty($aviso)): ?>
                <div class=“mensagem”>
                 <?= htmlspecialchars($aviso) ?>
            </div>
            <?php endif; ?>
            <br>
            <div class="signup-link">
                Ainda não tem acesso? <a href="inscricao.php">Cadastre-se</a>
            </div>
        </form>
    </div>
    <footer>
        <a class="rodape">AgroTech Insight© - Somos verdes e importamos verde para o mundo!🚜</a>
    </footer>
</body>
</html>
