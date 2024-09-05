document.addEventListener('DOMContentLoaded', function() {
    const btnCardapio = document.getElementById('btn-cardapio');
    const cardapioContainer = document.getElementById('cardapio-container');
    const btnFechar = document.getElementById('btn-fechar');
    const cardapioBotoes = document.getElementById('cardapio-botoes');

    btnCardapio.addEventListener('click', function() {
        carregarCardapio();
        cardapioContainer.style.display = 'flex';
    });

    btnFechar.addEventListener('click', function() {
        cardapioContainer.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === cardapioContainer) {
            cardapioContainer.style.display = 'none';
        }
    });
});

function mostrarImagem(caminhoImagem) {
    var modal = document.getElementById('imagem-modal');
    var imagem = document.getElementById('imagem-exibida');
    imagem.src = caminhoImagem;
    modal.style.display = 'block';  
}

function fecharImagem() {
    var modal = document.getElementById('imagem-modal');
    modal.style.display = 'none';  
}

function carregarCardapio() {
    fetch('api/cardapio.php?action=read')
        .then(response => response.json())
        .then(data => {
            const cardapioBotoes = document.getElementById('cardapio-botoes');
            cardapioBotoes.innerHTML = ''; 
            data.forEach(item => {
                const button = document.createElement('button');
                button.className = 'item-cardapio';
                button.textContent = item.nome;
                button.onclick = () => mostrarImagem(item.imagem);
                cardapioBotoes.appendChild(button);
            });
        });
}
