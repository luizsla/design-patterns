<?php
/**
 * Description of ICPP
 *  Classe que implementa o imposto ICPP com varinaça de maior ou menor de acordo
 * com iplementação Template Method. Extende CalculoDeImpostoCondicional.
 * @author Luiz Eduardo Amorim.
 */
class ICPP extends CalculoDeImpostoCondicional {
    
    function __construct(\Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    protected function condicaoDoOrcamento(\Orcamento $orcamento) {
        return $orcamento->getValor() < 500;
    }
    
    protected function descontoMenor(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.05;
    }
    
    protected function descontoMaior(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.07;
    }
}
