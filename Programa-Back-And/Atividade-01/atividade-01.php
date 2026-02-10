<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <?php 

//============================Bola===============================

class Bola{
    public $Marca; //Atributo
    public $Cor; //Atributo
    public $Esporte; //Atributo
    public $Modelo; //Atributo
    public $Custura; //Atributo
    
    public function Chutar() { //Método
    
        return "Chutar a bola da marca ".$this->Marca;
    }

    public function Furar() {//Método
    
        return "A bola furou da cor ".$this->Cor;
    }

    public function boiar() {//Método
    
        return "A bola boiando é do modelo ".$this->Modelo;
    }
    
}
echo "<h1>Bola</h1>";
$bolavermelha = new Bola();
$bolavermelha->Marca = "Nike";
echo $bolavermelha->Chutar();
echo "<br>";
$bolaazul = new Bola();
$bolaazul->Cor = "Azul";
echo $bolaazul->Furar();
echo "<br>";
$bolapreta = new Bola();
$bolapreta->Modelo = "Futebol";
echo $bolapreta->boiar();
echo "<br>";

//============================Estojo===============================

class Estojo{
    public $Marca; //Atributo
    public $Cor; //Atributo
    public $Tamanho; //Atributo
    public $Modelo; //Atributo
    public $Material; //Atributo
    
    public function Gardar() {//Método
    
        return "Garda essa caneta no estojo  ".$this->Cor;
    }

    public function Fechar() {//Método
    
        return "O estojo fechado é da marca ".$this->Marca;
    }
    public function Abrir() {//Método
    
        return "O estojo aberyo é ".$this->Tamanho;
    }
    }

echo "<h1>Estojo</h1>";
$estojovermelho = new Estojo();
$estojovermelho->Cor = "Vermelho";
echo $estojovermelho->Gardar();
echo "<br>";
$estojoazul = new Estojo();
$estojoazul->Marca = "ACADÉMIE";
echo $estojoazul->Fechar();
echo "<br>";
$estojopreto = new Estojo();
$estojopreto->Tamanho = "Pequeno";
echo $estojopreto->Abrir();
echo "<br>";

//============================Caneta===============================

class Caneta{
    public $Marca; //Atributo
    public $Cor; //Atributo
    public $Material; //Atributo
    public $Modelo; //Atributo
    public $Tinta; //Atributo
    
    public function desenhar() {//Método
    
        return "Você desenha com a caneta ".$this->Tinta;
    }
    public function Escrevar() {//Método
    
        return "Eu escrevi com a caneta da marca ".$this->Marca;
    }
    public function rabiscar() {//Método
    
        return "Eu bom rabiscar com a caneta do modelo ".$this->Modelo;
    }
    }

echo "<h1>Caneta</h1>";
$canetaverde = new Caneta();
$canetaverde->Tinta = "Azul";
echo $canetaverde->desenhar();
echo "<br>";
$canetavermelha = new Caneta();
$canetavermelha->Marca = "Bic";
echo $canetavermelha->Escrevar();
echo "<br>";
$canetaazul = new Caneta();
$canetaazul->Modelo = "Esferográfica";
echo $canetaazul->rabiscar();
echo "<br>";

//============================Caixa===============================

class Caixa{
    public $Material; //Atributo
    public $Cor; //Atributo
    public $Tamanho; //Atributo
    public $Modelo; //Atributo
    public $Formato; //Atributo
    
    public function Gardar() {//Método
    
        return "Eu guardei na caixa de formado ".$this->Formato;
    }
    public function Fechar() {//Método
    
        return "Você fechou a caixa da cor ".$this->Cor;
    }
    public function Abrir() {//Método
    
        return "Eu abri a caixa do material ".$this->Material;
    }
    }
echo "<h1>Caixa</h1>";
$caixaverde = new Caixa();
$caixaverde->Formato = "Quadrada";
echo $caixaverde->Gardar();
echo "<br>";
$caixavermelha = new Caixa();
$caixavermelha->Cor = "Vermelha";
echo $caixavermelha->Fechar();
echo "<br>";
$caixapreta = new Caixa();
$caixapreta->Material = "Papelão";
echo $caixapreta->Abrir();
echo "<br>";
//============================Papel===============================

    class Papel{
    public $Material; //Atributo
    public $Cor; //Atributo
    public $Tamanho; //Atributo
    public $Modelo; //Atributo
    public $Formato; //Atributo
    
    public function Amassar() {//Método
    
        return "Eu amassei o papel no formato ".$this->Formato;
    }
    public function Escrever() {//Método
    
        return "Você escreveu no papel do modelo ".$this->Modelo;
    }
    public function Rasgar() {//Método
    
        return "Eu rasgei o papel da cor ".$this->Cor;
    }
    }

echo "<h1>Papel</h1>";
$papelbranco = new Papel();
$papelbranco->Cor = "Branco";
echo $papelbranco->Rasgar();
echo "<br>";
$papelvermelho = new Papel();
$papelvermelho->Formato = "A4";
echo $papelvermelho->Amassar();
echo"<br>";
$papelazul = new Papel();
$papelazul->Modelo = "Sulfite";
echo $papelazul->Escrever();


?>
</body>
</html>