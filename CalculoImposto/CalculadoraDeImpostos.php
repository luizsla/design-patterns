<?php
/**
 * Description of CalculadoraDeImpostos
 *  Classe php que serve de calculadora de impostos com base nas classes filhas.
 * @author Luiz Eduardo Amorim.
 */
class CalculadoraDeImpostos {
    
    function calculaImposto(Orcamento $orcamento, Imposto $imposto) {
        return $imposto->calcula($orcamento);
    } 
}
