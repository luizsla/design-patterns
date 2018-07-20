<?php
    require_once 'CadeiaDeRetorno.php';
    require_once 'Conta.php';
    require_once 'Requisicao.php';
    
    $requisicaoXML = new Requisicao("RequisicaoXML", 2);
    $requisicaoVirgula = new Requisicao("Requisição por Virgula", 3);
    $requisicaoPorcentagem = new Requisicao("Requisição por porcentagem", 1);
    $conta = new Conta("Luiz Eduardo Amorim", 530);
    
    $retornoRequisicao = new CadeiaDeRetorno();
?>

<h1>O formato desejado é:</h1>

<h2><?= $retornoRequisicao->procuraRetorno($conta, $requisicaoXML); ?></h2>
    
