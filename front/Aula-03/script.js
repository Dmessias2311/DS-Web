
//=================Criando o contador de item=================
var contadorItem = 0

function adicionar(){
    //*Incrementando o contador de item
    contadorItem ++

    //*Criando o item da lista
    let novoItem = document.createElement("li")

    //*Adicionando o texto do item da lista
    novoItem.textContent = contadorItem + " - " + prompt("Digite a tarefa: ")

    //*Atribuo um id
    novoItem.setAttribute("id", contadorItem)

    //*Criar o botão de remover 
    let botaoRemover = document.createElement("button")

    //*Adicionando o texto ao botão 
    botaoRemover.textContent = "Remover"
    
    //*Adicionar uma função ao botão
    botaoRemover.setAttribute("onclick",`remover(${contadorItem})`)

    //*Adicionara o boão ao novo item
    novoItem.appendChild(botaoRemover)
    document.getElementById("lista").appendChild(novoItem)
}

//=================Criando a função para remover item=================
function remover(){
    var item = document.getElementById(contadorItem)
    document.getElementById("lista").removeChild(item)
}