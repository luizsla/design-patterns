<?php
/**
 * Description of CalculoDeImpostoCondicional
 *  Classe abstrata que isola a lógica de implantação das varianças dos diferen
 * tes impostos. Implementa Imposto de acordo com padrão Strategy.
 * @author Luiz Eduardo Amorim.
 */
abstract class CalculoDeImpostoCondicional extends Imposto {
    
    function __construct(\Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    final function calcula(\Orcamento $orcamento) {
        if ($this->condicaoDoOrcamento($orcamento)) {
            return $this->descontoMenor($orcamento) + $this->calculoOutroImposto($orcamento);
        } else {
            return $this->descontoMaior($orcamento) + $this->calculoOutroImposto($orcamento);
        }
    }
    
    protected abstract function condicaoDoOrcamento(\Orcamento $orcamento);
    protected abstract function descontoMenor(\Orcamento $orcamento);
    protected abstract function descontoMaior(\Orcamento $orcamento);
}
