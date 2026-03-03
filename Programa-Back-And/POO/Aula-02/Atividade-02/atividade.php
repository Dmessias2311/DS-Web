<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02|Exercicio 1</title>
</head>
<body>
    <?php 

//*==========Classe Pessoa(Pai)==========
class Pessoa {
    public $Nome = "Daniel";
    public $Idade = 17;
}

//*==========Classe Funcionario(Filho)==========
class Funcionario extends Pessoa {
    public function verDados() {
        echo get_class($this) . "<br/>";
        echo $this->Nome . "<br/>";
        echo $this->Idade . "<br/>";
        echo $this->Salario . "<br/>";
    }
}
//*==========Gerente(Filho)==========
class Gerente extends Pessoa {
    public function verDados() {
        echo get_class($this) . "<br/>";
        echo $this->Nome . "<br/>";
        echo $this->Idade . "<br/>";
        echo $this->dinheiro . "<br/>";
    }
}
//*==========Calcular Bonus==========
class Bonus extends Funcionario {
    public function calcularBonus() {
        $bonus = $this->Salario * 0.10;
        echo "O bônus do funcionário é: " . $bonus . "<br/>";
    }
}
//*==========Calcular Bonus Gerente==========
class BonusGerente extends Gerente {
    public function calcularBonus() {
        $bonus = $this->dinheiro * 0.20;
        echo "O bônus do gerente é: " . $bonus . "<br/>";
    }
}
//*==========Instanciando Funcionario==========
$funcionario = new Bonus();
$funcionario->Salario = 2000;
$funcionario->calcularBonus();
//*==========Instanciando Gerente==========
$gerente = new BonusGerente();
$gerente->dinheiro = 5000;
$gerente->calcularBonus();
?>  
</body>
</html>