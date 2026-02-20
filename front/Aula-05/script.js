
//*====================Eventos do Mouse====================

var area = document.getElementById("area");
var mensagem = document.getElementById("mensagem");

area.addEventListener("click", function () {
    mensagem.textContent = "Clique simples detectado!";
})

area.addEventListener("dblclick", function () {
    mensagem.textContent = "Clique duplo detectado!";
    //!============Mudar a cor do elemento=============
    if (area.style.background === "lightgreen") {
        area.style.background = "lightblue";
    } else {
        area.style.background = "lightgreen";
    }
});

//!============O mouse entrou na área=============
area.addEventListener("mouseenter", function () {
    mensagem.textContent = "O mouse entrou na área!";
});

//!============O mouse saiu da área=============
area.addEventListener("mouseleave", function () {
    mensagem.textContent = "O mouse saiu da área!";
});

//!=============O mouse está se movendo=============
var posicao = document.getElementById("posicao");


area.addEventListener("mousemove", function (event) {
    posicao.textContent = "X:" + event.clientX + " Y:"
        + event.clientY;
});

//!=============Função para o botão direito=============
area.addEventListener("contextmenu", function (event) {
    event.preventDefault();
    alert("Não é possivel inspecionar o elemento!");
});

//*====================Eventos do Teclado====================

//!=============Detectar quando uma tecla é pressionada=============
document.addEventListener("keydown", function (event) {
    console.log("Tecla pressionada: " + event.key);
});

//!=============Detectar quando uma tecla é liberada=============
document.addEventListener("keyup", function (event) {
    console.log("Tecla liberada: " + event.key);
});

//!==============Detectar o caractere digitado=============
document.addEventListener("keypress", function (event) {
    console.log("Caractere digitado: " + event.key);
});

//!=============Exibir a tecla pressionada em um elemento HTML=============
document.addEventListener("keydown", function (event) {
    //^^ Exibe a tecla pressionada
    var campo = document.getElementById("resultado");
    campo.textContent +=  event.key;
    //^^ Também mostra no console
    console.log("Tecla pressionada: " + event.key);
});
//*====================Eventos de Formulário====================



//*====================Eventos de Janela====================
