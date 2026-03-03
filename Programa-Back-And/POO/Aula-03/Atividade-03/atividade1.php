<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
<?php

//*===========Classe Dono(Pai)==============
class Dono {
    public $nome;
    public $tel;
    public function __construct($novoNome, $novoTel) {
        $this->nome = $novoNome;
        $this->tel = $novoTel;
    }
    public function exibirDados() {
        return "Dono: " . $this->nome . "  Tel: " . $this->tel;
    }
}
//*===========Classe Animal(Filho)==============
class Animal {
    public $nome;
    public $especie;
    public $dono;
    public function __construct($nome, $especie, Dono $dono) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->dono = $dono;
    }
    public function exibirDados() {
        return "Animal: " . $this->nome . " Espécie: " . $this->especie . "<br><hr>" . $this->dono->exibirDados();
    }
}
//*===========Instanciando as Classes==============
$dono = new Dono("Daniel", "(15) 99999-9999");
$animal = new Animal("Rex", "Cachorro", $dono);
echo $animal->exibirDados();
?>
</body>
</html>