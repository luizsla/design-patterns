<?php
/**
 * Description of SaldoMaiorQue500Mil
 * Classe PHP que caracteriza o comportamento de filtragem do objeto conta obede
 * cendo os parâmetros estabelescidos na classe mãe Filtro. 
 * @author Luiz Eduardo Amorim
 */
class SaldoMaiorQue500Mil extends Filtro {
    
    function __construct(\Conta $proximaConta = null) {
        parent::__construct($proximaConta);
    }
    
    public function filtra(\Contas $contas) {
        foreach ($contas->getContas() as $conta) {
            if ($conta->getValor() >= 500000) {
                return "{$conta->getNome()} é suspeita! <br>";
            }   
        }
        
        $this->filtraOutraConta($contas);
    }
}
