<?php
    require_once 'Orcamento.php';
    require_once 'CalculadorDeDescontos.php';
    require_once 'Itens.php';
    
    $orcamento = new Orcamento(1500);
    
    $item1 = new Itens("Cimento 500kg", 300);
    $orcamento->addItens($item1);
    $item2 = new Itens("Tijolos Ladrilhados", 300);
    $orcamento->addItens($item2);
    $item3 = new Itens("Caminão de areia", 220);
    $orcamento->addItens($item3);
    $item4 = new Itens("LAPIS", 200);
    $orcamento->addItens($item4);
    
    $calculadora = new CalculadorDeDescontos();
    $valorDoDesconto = $calculadora->calculaDesconto($orcamento);
?>

<h1>O Valor do Desconto é:</h1>
<br/>
<p><?= $valorDoDesconto; ?></p>