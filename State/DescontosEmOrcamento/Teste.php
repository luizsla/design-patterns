<?php
/**
 * Cadeia de implementação do padrão de projeto State.
 * @author Luiz Eduardo Amorim
 */

require_once("Orcamento.php");
    
    $reforma = new Orcamento(500.0);

    $reforma->aplicaDesconto();
    echo $reforma->getValor(); // imprime 475,00 pois descontou 5%
    $reforma->aprova(); // aprova nota!
    
    echo ("<br><br>");

    $reforma->aplicaDesconto();
    echo $reforma->getValor();// imprime 465,50 pois descontou 2%


    $reforma->finaliza();
