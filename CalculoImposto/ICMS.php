<?php
    require_once 'Imposto.php';
    require_once 'CalculoDeImpostoCondicional.php';
/**
 * Description of ICMS
 *  Class PHP que calcula o imposto ICMS com na variança do imposto. Extende a classe
 * CalculoDeImpostoCondicional.
 * @author luiz
 */
class ICMS extends CalculoDeImpostoCondicional {
    
    function condicaoDoOrcamento(Orcamento $orcamento) {
        return $orcamento->getValor() > 300;
    }
    
    function descontoMenor(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.01; 
    }
    
    function descontoMaior(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.025;
    }
}
