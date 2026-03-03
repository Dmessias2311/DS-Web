<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02|Exercicio 3</title>
</head>
<body>
    <?php

//*==========Classe Veiculo(Pai)==========
class Veiculo {
    public $Marca;
    public $Modelo;
    private $velocidade = 200;
    public function getVelocidade() {
        return $this->velocidade;
    }
}
//*==========Classe Carro(Filho)==========
class Carro extends Veiculo {
    public function acelerar() {
        echo "O carro acelera usando o pé até " . $this->getVelocidade() . " km/h.<br/>";
    }
}
//*==========Classe Moto(Filho)==========
class Moto extends Veiculo {
    public function acelerar() {
        echo "A moto acelera usando o a mão até " . $this->getVelocidade() . " km/h.<br/>";
    }
}
//*==========Instanciando Carro==========
$carro = new Carro();
$carro-> acelerar();
//*==========Instanciando Moto==========
$moto = new Moto();
$moto-> acelerar();

?>
</body>
</html>