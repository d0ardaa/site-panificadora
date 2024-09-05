<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panificadora Nosso Pão</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
        <div class="logo-section">
            <img src="./images/LOGO.png" alt="Logo da Panificadora Nosso Pão" class="logo">
            <h1>PANIFICADORA<br>NOSSO PÃO</h1>
            <p class="tagline">Comida feita com ingredientes à base de plantas e muito amor</p>
        </div>
        
        <div class="menu-section">
            <a href="#" id="btn-cardapio" class="menu-button">Cardápio</a>
            <a href="https://wa.me/SEU_NUMERO_COM_DDI?text=Olá,%20gostaria%20de%20mais%20informações" 
               id="btn-fale-conosco" class="menu-button" target="_blank">Fale Conosco</a>
        </div>

        <div class="social-media">
            <!-- Facebook -->
            <a href="https://www.facebook.com/nomedapagina" target="_blank">
                <img src="./images/facebook.PNG" alt="Facebook">
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/nomedapagina" target="_blank">
                <img src="./images/instagram.PNG" alt="Instagram">
            </a>
            <!-- Twitter -->
            <a href="https://www.twitter.com/nomedapagina" target="_blank">
                <img src="./images/twitter.PNG" alt="Twitter">
            </a>
        </div>
    </div>

    <div id="cardapio-container" class="container-cardapio">
        <div class="cardapio-content">
            <h2>NOSSO CARDÁPIO</h2>
            <div id="cardapio-botoes" class="cardapio-botoes">
                <!-- Botões do cardápio serão adicionados aqui via JavaScript -->
            </div>
            <button id="btn-fechar">Fechar</button>
        </div>
    </div>

    <!-- Container para exibir a imagem -->
    <div id="imagem-modal" class="imagem-modal" style="display: none;">
        <span class="fechar" onclick="fecharImagem()">&times;</span>
        <img id="imagem-exibida" class="imagem-conteudo">
    </div>

    <script src="./js/script.js"></script>
</body>
</html>
