<?php
    require_once 'Contas.php';
    require_once '';
/* 
 *  Exercício com padrões de projeto em PHP. Implementando o padrão Decorator em 
 * um filtro de contas.
 */
    $contas = new Conta("", 0, "");
    
    $conta1 = new Conta("Maria", 3000, "11/11/17");
    $conta2 = new Conta("João", 100 ,"25/08/15");
    $conta3 = new Conta("José", 6000000, "12/07/17");
    
    $contas->addConta($conta1);
    $contas->addConta($conta2);
    $contas->addConta($conta3);
    
    



