
//=================Contador=================
var contadorItem  = 0
function cadastro(){
    //*Incrementando o contador de email
    contadorItem ++
    //*Criando o item da lista
    let novoItem = document.createElement("li")
    let Email = document.getElementById("Email").value
    let Telefone = document.getElementById("Telefone").value
    let Turma = document.getElementById("Turma").value
    let RM = document.getElementById("RM").value
    let Nome = document.getElementById("Nome").value

    //*Adicionando o texto do item da lista
        novoItem.innerHTML =
    contadorItem + " - <br>" +
    "Nome: " + Nome + "<br>" +
    "Email: " + Email + "<br>" +
    "RM: " + RM + "<br>" +
    "Telefone: " + Telefone + "<br>" +
    "Turma: " + Turma + "<br>";


    
    //*Atribuo um id
    novoItem.setAttribute("id", contadorItem);
    //*Criar o botão de remover
    let botaoRemover = document.createElement("button")
    //*Adicionando o texto ao botão
    botaoRemover.textContent = "Remover"
    //*Adicionar uma função ao botão
    botaoRemover.setAttribute("onclick",`removerEmail(${contadorItem})`)
    //*Adicionara o boão ao novo item
    novoItem.appendChild(botaoRemover)
    document.getElementById("lista").appendChild(novoItem)
}
//=================Função Remover =================
function removerEmail(contadorItem){
    var item = document.getElementById(contadorItem)
    document.getElementById("lista").removeChild(item)
}

