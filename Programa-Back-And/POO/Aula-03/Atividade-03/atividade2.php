<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atividade 02</title>
</head>
<body>
    <?php

//*===========Classe Artista(Pai)==============
class Artista{
    public $nome;
    public $genero;
    public function __construct($novoNome, $novoGenero, $novoTempo){
        $this->nome = $novoNome;
        $this->genero = $novoGenero;
        $this->tempo = $novoTempo;
    }
}
//*===========Classe Musica(Filho)==============
class Musica extends Artista{
    public $titulo;
    public function __construct($novoTitulo, $novoNome, $novoGenero, $novoTempo){
        parent::__construct($novoNome, $novoGenero, $novoTempo);
        $this->titulo = $novoTitulo;
    }
    public function exibirDados(){
        return "Música: " . $this->titulo . "<br> Artista: " . $this->nome . "<br> Gênero: " . $this->genero . "<br> Tempo: " . $this->tempo;
    }
}
//*===========Instanciando as Classes==============
$musica = new Musica("Cristiano Araújo", "Mente pra Mim", "Sertanejo", "2:57");
echo $musica->exibirDados();

?>
</body>
</html>