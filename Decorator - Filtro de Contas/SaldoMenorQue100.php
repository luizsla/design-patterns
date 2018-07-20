<?php
/**
 * Description of SaldoMenorQue100
 *  Classe PHP que caracteriza o comportamento de filtragem do objeto conta obede
 * cendo os parâmetros estabelescidos na classe mãe Filtro.
 * @author Luiz Eduardo Amorim
 */
class SaldoMenorQue100 extends Filtro {
    
    function __construct(\Conta $proximaConta) {
        parent::__construct($proximaConta);
    }
    
    public function filtra($contas) {
        foreach ($contas as $conta) {
            if ($contas->getSaldo() <= 100) {
                return "{$conta->getNome()} é suspeita! <br>";
            }
        }
        
        $this->filtraOutraConta($contas);       
    } 
}
