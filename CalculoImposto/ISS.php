<?php
    require_once 'Imposto.php';
    require_once 'CalculoDeImpostoCondicional.php';
/**
 * Description of ICMS
 *  Class PHP que calcula o imposto ISS com na variança do imposto. Extende a classe
 * CalculoDeImpostoCondicional.
 * @author Luiz Eduardo Amorim.
 */
    
class ISS extends CalculoDeImpostoCondicional {
    
    protected function condicaoDoOrcamento(Orcamento $orcamento) {
        return $orcamento->getValor() > 500;
    }
    
    protected function descontoMenor(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.01; 
    }
    
    protected function descontoMaior(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.025;
    }
}
