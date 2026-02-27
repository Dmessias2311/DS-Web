const player = document.getElementById("player");
const labirinto = document.body; // Onde está o background

let posY = 200; // Posição inicial Y
let posX = 50;  // Posição inicial X
const velocidade = 5;

// Para física mais suave, usamos um loop de animação
const teclas = {};

document.addEventListener("keydown", (e) => teclas[e.key.toLowerCase()] = true);
document.addEventListener("keyup", (e) => teclas[e.key.toLowerCase()] = false);

function atualizar() {
    let proxX = posX;
    let proxY = posY;

    if (teclas["w"]) proxY -= velocidade;
    if (teclas["s"]) proxY += velocidade;
    if (teclas["a"]) proxX -= velocidade;
    if (teclas["d"]) proxX += velocidade;

    // --- LÓGICA DE FÍSICA / COLISÃO ---
    // 1. Limites da tela
    const dentroDaTela = proxX >= 0 && proxX <= window.innerWidth - 40 &&
    proxY >= 0 && proxY <= window.innerHeight - 40;

    // 2. Simulação de colisão (Parede invisível)
    // Como não temos um motor de física real aqui, definimos áreas proibidas.
    // Exemplo: Se o Brunão tentar entrar no meio do labirinto (ajuste conforme a imagem)
    let bateuNoMuro = false;
    
    // Exemplo de uma "caixa" de colisão para a cerca central
    if (proxX > 300 && proxX < 500 && proxY > 150 && proxY < 350) {
        bateuNoMuro = true;
    }

    if (dentroDaTela && !bateuNoMuro) {
        posX = proxX;
        posY = proxY;
    }

    // Aplica as novas posições
    player.style.top = posY + "px";
    player.style.left = posX + "px";

    requestAnimationFrame(atualizar);
}

// Inicia o loop de física
atualizar();