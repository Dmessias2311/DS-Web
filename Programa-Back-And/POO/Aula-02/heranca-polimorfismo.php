<?php
class Pessoa
{
    public $nome = "Daniel";
    protected $idade = 17;
    private $senha = "12345";
    public function verDados()
    {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}
class Programador extends Pessoa
{
    public function verDados()
    {

        //Exibe a Classe atual
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

//Instanciando a classe pai
$Daniel = new Programador();
$Daniel->verDados();

echo "<br>";
//Instanciando a classe filho
$Daniel = new Programador();
$Daniel->verDados();