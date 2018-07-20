<?php
/**
 *  Description of Imposto.
 * Intercafe PHP que servirá de template para os métodos das classes de impostos.
 * @author Luiz Eduardo Amorim.
 */
abstract class Imposto {
    
    protected $outroImposto;
    
    function __construct(\Imposto $outroImposto = null) {
        $this->outroImposto = $outroImposto;
    }
    
    protected abstract function calcula(Orcamento $orcamento);
    
    protected function calculoOutroImposto(\Orcamento $orcamento) {
        if (is_null($this->outroImposto)) {
            return 0;
        }
        
        return $this->outroImposto->calcula($orcamento);
    }
    
}
