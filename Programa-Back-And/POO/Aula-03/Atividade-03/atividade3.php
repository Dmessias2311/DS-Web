<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
<?php

//*===========Classe Fabricante(Pai)==============
class Fabricante {
    public $nome;
    public $pais;
    public function __construct($novoNome, $novoPais) {
        $this->nome = $novoNome;
        $this->pais = $novoPais;
    }
    public function exibirDados() {
        return "Fabricante: " . $this->nome . "  País: " . $this->pais;
    }
}

//*===========Classe Motor(Filho)==============
class Motor {
    public $combustivel;
    public $potencia;
    public $fabricante;
    public function __construct($combustivel, $potencia, Fabricante $fabricante) {
        $this->combustivel = $combustivel;
        $this->potencia = $potencia;
        $this->fabricante = $fabricante;
    }
    public function exibirDados() {
        return "Motor: " . $this->combustivel . " Potência: " . $this->potencia . "<br><hr>" . $this->fabricante->exibirDados();
    }
}
//*===========Classe Carro(Filho)==============
class Carro {
    public $modelo;
    public $ano;
    public $fabricante;
    public function __construct($modelo, $ano, Fabricante $fabricante) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->fabricante = $fabricante;
    }
    public function exibirficha() {
        return "Carro: " . $this->modelo . " Ano: " . $this->ano . "<br><hr>" . $this->fabricante->exibirDados();
    }
}
//*===========Instanciando as Classes==============
$fabricante = new Fabricante("BMW", "Alemanha");
$motor = new Motor("Gasolina", "250cv", $fabricante);
$carro = new Carro("M3", 2022, $fabricante);
echo $carro->exibirficha();
echo "<br><br>";
echo $motor->exibirDados();
?>
</body>
</html>