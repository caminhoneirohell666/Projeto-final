<?php
include("db.php");
include("validacao.php");
include("verificalogin.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrotech Insight - Inovação no Agronegócio</title>
    <!-- Importando fontes profissionais -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <header class="cabecalho">
        <!-- Logo e nome do projeto -->
        <div class="logo">
            <img src="img/MBM.png" alt="Logo Agrotech Insight">
        </div>
        <h1 class="nome-site">Agrotech Insight</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="#conteudo-principal">Apresentação</a>
            <a class="cabecalho-menu-item" href="#conteudo-terciario">Links</a>
            <a class="cabecalho-menu-item" href="meuperfil.php">Meu perfil</a>
            <a class="cabecalho-menu-item" href="sair.php">Sair</a>
        </nav>
    </header>

    <main class="conteudo">
        <section class="conteudo-principal" id="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h2 class="conteudo-principal-titulo">Inovação no Agronegócio</h2>
                <p class="conteudo-principal-paragrafo">A Agrotech Insight oferece soluções inteligentes para o agronegócio, com foco em otimização e tecnologia aplicada ao campo.</p>
                <a href="https://www.youtube.com/watch?v=a-Zkx4Z1EKE" target="_blank">
                    <button class="conteudo-principal-botao">Saiba mais</button>
                </a> 
            </div>
            <!-- Imagem de trator ou campo -->
            <img class="conteudo-principal-imagem" src="img/TATOR.jpg" alt="Trator no campo">
        </section>

        <section class="conteudo-secundario" id="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo">Do que se trata o produto</h3>
            <p class="conteudo-secundario-paragrafo">1. A plataforma oferece <strong>soluções inteligentes</strong> para o setor agrícola.</p>
            <p class="conteudo-secundario-paragrafo">2. Através da integração com <strong>tecnologia avançada</strong>, otimizamos a colheita e o uso de máquinas agrícolas.</p>
            <p class="conteudo-secundario-paragrafo">3. Acesse mais detalhes nas seções de navegação para aprender como nosso sistema pode melhorar o dia a dia no campo.</p>
            <br>
        </section>

        <section class="conteudo-terciario" id="conteudo-terciario">
            <h3 class="conteudo-terciario-titulo">Meus contatos</h3>
            <a class="conteudo-terciario-botao" href="https://www.fwi.co.uk/machinery/tractors/ultimate-guide-to-buying-a-tractor-2024" target="_blank">Guia de tratores</a>
            <a class="conteudo-terciario-botao" href="https://forbes.com.br/forbesagro/2022/08/agro-e-vida/" target="_blank">Agro é vida</a>
            <a class="conteudo-terciario-botao" href="https://forbes.com.br/wp-content/uploads/2022/09/agro-consumidor-28set22-puhimeo-getty-images.jpg" target="_blank">Agro alimenta</a>
        </section>
    </main>

    <footer>
        <!-- Rodapé atualizado com nome do projeto -->
        <a class="rodape">AgroTech Insight© - Somos verdes e importamos verde para o mundo!🚜</a>
    </footer>
</body>
</html>

<?php
// Caso precise exibir algo aqui
echo "<br>Amigo, estou aqui";
?>
