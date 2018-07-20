<?php
    require_once 'DescontoPor5Itens.php';
    require_once 'DescontoPor500Reais.php';
    require_once 'DescontoPorVendaCasada.php';
    require_once 'semDesconto.php';
/**
 * Description of CalculadorDeDescontos
 * Classe PHP que faz a calculo de descontos de acordo com diferentes padrões de
 * projetos implementado.
 * @author luiz Eduardo Amorim.
 */
class CalculadorDeDescontos {
    function calculaDesconto(\Orcamento $orcamento) {
        //Instanciando os objetos da cadeia.
        $descontoPor5Itens = new DescontoPor5Itens();
        $descontoPor500Reais = new DescontoPor500Reais();
        $descontoPorVendaCasada = new DescontoPorVendaCasada();
        $semDesconto = new semDesconto();
        
        //Estabelescimento do fluxo da cadeia de responsabilidade.
        $descontoPor5Itens->setProximo($descontoPor500Reais);
        $descontoPor500Reais->setProximo($descontoPorVendaCasada);
        $descontoPorVendaCasada->setProximo($semDesconto);
        
        $valorDoDesconto = $descontoPor5Itens->aplicaDesconto($orcamento);
        return $valorDoDesconto;
    }
}
