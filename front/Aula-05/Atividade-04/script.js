
//*====================Eventos do Mouse====================

var area = document.getElementById("area");
var mensagem = document.getElementById("mensagem");

area.addEventListener("click", function () {
    mensagem.textContent = "Clique 2 vezes se o Corinthians é grande!";
})

area.addEventListener("dblclick", function () {
    mensagem.textContent = "Clique com o botão direito se o Corinthians é o maior time de São Paulo!";
    //!============Mudar a cor do elemento=============
    if (area.style.background === "lightgreen") {
        area.style.background = "lightblue";
    } else {
        area.style.background = "lightgreen";
    }
});

//!============O mouse entrou na área=============
area.addEventListener("mouseenter", function () {
    mensagem.textContent = "Sai da caixa se o Corinthians for o maior time de São Paulo!";
});

//!============O mouse saiu da área=============
area.addEventListener("mouseleave", function () {
    mensagem.textContent = "Clique na caixa se o Corinthians for o maior time de São Paulo!";
});
//!=============Função para o botão direito=============
area.addEventListener("contextmenu", function (event) {
    event.preventDefault();
    alert("Não é possivel inspecionar Corinthians pois ele é minusculo e o menor de todos os times de São Paulo!");
});
