const player = document.getElementById("player");
let posY = 0;
let posX = 0;
const velocidade = 20;

document.addEventListener("keydown", function (event) {
    const tecla = event.key.toLowerCase();

    if (tecla === "s") {
        posY += velocidade;
    } else if (tecla === "w") {
        posY -= velocidade;
    } else if (tecla === "d") {
        posX += velocidade;
    } else if (tecla === "a") {
        posX -= velocidade;
    }

    // Aplica as novas posições
    player.style.top = posY + "px";
    player.style.left = posX + "px";
});