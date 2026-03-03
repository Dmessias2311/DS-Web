<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02|Desafio 2</title>
</head>
<body>
    <?php
//*==========Classe Documento(Pai)==========
class Documento {
    private $Numero;
    public function getNumero() {
        return $this->Numero;
    }public function setNumero($Numero) {
        $this->Numero = $Numero;
    }
}
//*==========Classe CPF(Filho)==========
class CPF extends Documento {
    function validaCPF($cpf) {
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
    if (strlen($cpf) != 11) {
        return false;
    }
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
    }
}
//*==========Instanciando CPF==========
$cpf = new CPF();
$cpf->setNumero("123.456.789-09");
if ($cpf->validaCPF($cpf->getNumero())) {
    echo "CPF válido: " . $cpf->getNumero() . "<br/>";
}
    ?>
</body>
</html>