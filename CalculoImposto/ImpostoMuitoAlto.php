<?php
/**
 * Description of ImpostoMuitoAlto
 *  Classe que representa um imposto muito alto que pode ser decorado com o padrão
 * de projeto Decorator.
 * @author Luiz Eduardo Amorim.
 */
class ImpostoMuitoAlto extends Imposto {
    function __construct(\Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    function calcula(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.2 + $this->calculoOutroImposto($orcamento);
    }

}
