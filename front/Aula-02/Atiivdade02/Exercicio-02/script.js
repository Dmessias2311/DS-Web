//=========================Botão==========================
function MudarFoto() {
    document.getElementById("foto").setAttribute("src","timepequeno.png");

}function MudarFoto2() {
    document.getElementById("foto").setAttribute("src","timedovar.jpg");

}function ConsoleApare() {
    var resultado = document.getElementById("foto").getAttribute("src");
    console.log(resultado);
}