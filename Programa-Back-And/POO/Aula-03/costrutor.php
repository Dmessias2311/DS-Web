<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-03|Construtor</title>
</head>
<body>
<?php
    class Pessoa {
    public $nome;
    public $idade;

    public function __construct($novoNome, $novaIdade) {
        $this->nome = $novoNome;
        $this->idade = $novaIdade;
    }

public function exibirDados() {
    return "O nome da pessoa é " . $this->nome . " e a idade é " . $this->idade . " anos.";

}

public function alterarDados($novoNome, $novaIdade) {
    $this->nome = $novoNome;
    $this->idade = $novaIdade;
}
}
$pessoa = new Pessoa("Daniel", 17);

echo $pessoa->exibirDados();

$pessoa->alterarDados("Henry", 17);

echo "<br>";

echo $pessoa->exibirDados();

?>
</body>
</html>
