<?php 

class Pessoas{
    public $nome; //Atributo

    public function falar() {//Método
    return "O meu nome é".$this->nome;
    }
}
$Daniel = new Pessoa();
$Daniel->nome = "Daniel Messias";
echo $Daniel->falar();
?>