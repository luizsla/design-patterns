<?php
/**
 * Description of Orcamento
 *  Classe que delimita o orçamento base para calculo de imposto.
 * @author Luiz Eduardo Amorim.
 */
class Orcamento {
    private $valor;
    
    function __construct($orcamento) {
        $this->valor = $orcamento;
    }
    
    function getValor() {
        return $this->valor;
    }
}
