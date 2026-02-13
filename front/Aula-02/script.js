
//Funções em javasccript

function somarNumeros(num1, num2 ) {
    return num1 + num2;
}

let resultado = somarNumeros(5, 10)
console.log(resultado)  

resultado = somarNumeros(50,100)
console.log(resultado)

//Trabalhando com data e hora

let dataAtual = new Date()

console.log(dataAtual.toISOString())

let ano = dataAtual.getFullYear();
let mes = dataAtual.getMonth() + 1 ;
let dia = dataAtual.getDate();
let hora = dataAtual.getHours();
let minutos = dataAtual.getMinutes();
let segundos = dataAtual.getSeconds();

console.log(`${dia}/${mes}/${ano} ${hora}:${minutos}:${segundos}`);

//=================================================================
//Outro exemplo de Data
let hoje = new Date();
let diasParaAdicionar = 7;

//Criar uma nova data a partir da data atual
let novaData = new Date(hoje);
novaData.setDate(novaData.getDate() + diasParaAdicionar);

//Exibir a nova data 
console.log(novaData.toLocaleDateString());

//=================================================================
//Data para subtrair dias
let data1= new Date('2025-03-19');
let data2 = new Date('2025-03-26');

//Diferença em milissegundos
let diferençaMs = data2 - data1;


//=================================================================
//Manipulando o DOM
document.getElementById('conteudo').innerHTML += '<h1>Olá, Mundo!</h1>';

var valor = document.getElementById("conteudo").innerHTML
console.log(valor); 

//----------------------------------------------------------------
//Adiciondo foto com o setAttribute e o getAttribute
document.getElementById('foto').setAttribute("src","abc.png");

console.log(document.getElementById('foto').getAttribute("src"));

//----------------------------------------------------------------
//Alterando propriedades do estilo CSS
document.getElementById("conteudo").style.backgroundColor = "lightblue";
document.getElementById("foto").style.width = "250px";

//=================================================================
//Criando uma funçao para aumentar o tamanho da foto

function mudaTamanho() {
    document.getElementById("foto").style.width = "500px";
}