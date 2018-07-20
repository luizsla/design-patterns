<?php
    /* 
     * Arquivo indice da calculadora de impostos utilizando o padrão: Strategy.
     * Index que conecta as classes Orcamento com os diferentes impostos.
     */

    require_once 'Orcamento.php';
    require_once 'CalculadoraDeImpostos.php';
    require_once "ICMS.php";
    require_once 'ISS.php';
    require_once 'IKCV.php';
    require_once 'ICPP.php';
    require_once 'ImpostoMuitoAlto.php';
?>

<h1>Padrão Strtegy - Implementação</h1>
<br>
    
<?php
    $orcamento = new Orcamento(500);
    $calculadora = new CalculadoraDeImpostos();
    
    echo $calculadora->calculaImposto($orcamento, new ICMS(new ISS()));
    echo "<br>";
    echo $calculadora->calculaImposto($orcamento, new ISS());
    echo "<br>";
    echo $calculadora->calculaImposto($orcamento, new IKCV());
    echo "<br>";
    echo $calculadora->calculaImposto($orcamento, new ICPP());
    echo "<br>";
    echo $calculadora->calculaImposto($orcamento, new ISS(new ImpostoMuitoAlto(new ICPP())));
    

