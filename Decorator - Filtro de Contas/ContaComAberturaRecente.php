<?php
/**
 * Classe PHP que caracteriza o comportamento de filtragem do objeto conta obede
 * cendo os parâmetros estabelescidos na classe mãe Filtro. Filtra contas com ab
 * ertura no mês corrente.  
 * @author Luiz Eduardo Amorim
 */
class ContaComAberturaRecente extends Filtro {
    
    function __construct(\Conta $proximaConta) {
        parent::__construct($proximaConta);
    }
    
    public function filtra(\Contas $contas) {
        foreach ($contas as $conta) {
            $DataAbertura = explode($conta->getData(), "/");
            $mesAbertura = $DataAbertura[2];
            
            if ($mesAbertura == date('m')) {
                return ("{$conta->getNome()} é suspeita! <br>");
            }
        }
        
        $this->filtraOutraConta($contas);
    }
}
