<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02|Exercicio 2</title>
</head>
<body>
    <?php

//*=========Classe Animal(Pai)=========
abstract class Animal {
    function fazerSom() {
    }
}
//*=========Classe Sapo(Filho)=========
class sapo extends Animal {
    function fazerSom() {
        echo "O sapo irrieein.<br/><hr/>";
    }
}
//*=========Classe Cavalo(Filho)=========
class cavalo extends Animal {
    function fazerSom() {
        echo "O cavalo ira.<br/>";
    }
    public function  mover(){
        return "Galopa e anda" . parent::fazerSom();
    }
}
//*=========Classe Tartutaga(Filho)=========
class tartaruga extends Animal {
    function fazerSom() {
        echo "A tartaruga oioiun.<br/><hr/>";
    }
}

$tartaruga = new tartaruga();
$tartaruga->fazerSom();
$sapo = new sapo();
$sapo->fazerSom();
$cavalo = new cavalo();
$cavalo->fazerSom();
echo $cavalo->mover();
?>
</body>
</html>