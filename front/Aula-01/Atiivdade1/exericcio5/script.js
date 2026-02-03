var ini = prompt("Digite o valor inicial")

var mes = prompt("Digite a quantidade de meses que deseja aplicar o dinhiro")

var tax = prompt("Digite a qual é a taxa de juros")

var resultado =(ini *(1+(tax/100)) ** mes)

alert(resultado.toFixed(2));
console.log(resultado.toFixed(2))