<?php
    require_once 'CalculoDeImpostoCondicional.php';
/**
 * Description of IKCV.
 *  Classe que implementa o imposto IKCV com varinaça de maior ou menor de acordo
 * com iplementação Template Method. Extende CalculoDeImpostoCondicional.
 * @author Luiz Eduardo Amorim.
 */
class IKCV extends CalculoDeImpostoCondicional {
    
    function __construct(\Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    protected function condicaoDoOrcamento(\Orcamento $orcamento) {
        return $orcamento->getValor() < 500;
    }
    
    protected function descontoMenor(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }
    
    protected function descontoMaior(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.1;
    }
}
