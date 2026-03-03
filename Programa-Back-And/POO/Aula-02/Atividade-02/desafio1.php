<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02|Desafio 1</title>
</head>
<body>
    <?php

//*==========Classe Protudo(Pai)==========
class Produto {
    public $Nome;
    public $Preco;
    protected $estoque;
    public $desconto;
//*==========Calcular Desconto==========
public function calcularDesconto($desconto) {
    $precoComDesconto = $this->Preco - ($this->Preco * ($desconto / 100));
    return $precoComDesconto;
} 
    }

//*==========Classe Eletronico(Filho)==========
class Eletronico extends Produto {
    public function info() {
        echo "Produto: " . $this->Nome . "<br/>";
        echo "Preço: R$ " . $this->Preco . "<br/>" . "<hr>";
    }
}
//*==========Classe Roupas(Filho)==========
class Roupas extends Produto {
    public function info() {
        echo "Produto: " . $this->Nome . "<br/>";
        echo "Preço: R$ " . $this->Preco . "<br/>" . "<hr>";
    }
}
//*==========Instanciando Eletronico==========
$eletronico = new Eletronico();
$eletronico->Nome = "Celular";
$eletronico->Preco = 1500;
$eletronico->info();
echo "Preço com desconto: R$ " . $eletronico->calcularDesconto(10) . "<br/>" . "<hr>";
//*==========Instanciando Roupas==========
$roupa = new Roupas();
$roupa->Nome = "Camisa";
$roupa->Preco = 100;
$roupa->info();
echo "Preço com desconto: R$ " . $roupa->calcularDesconto(20) . "<br/>" . "<hr>"; 
?>
</body>
</html>