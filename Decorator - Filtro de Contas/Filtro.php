<?php
/**
 * Description of Filtro
 *  Classe abstrata que implementa o padrão de projeto Decorator em vários filtros
 * de conta de um sistema de filtragem de um banco.
 * @author Luiz Eduardo Amorim.
 */

abstract class Filtro {
    
    protected $proximaConta;
            
    function __construct(\Conta $proximaConta = null) {
        $this->proximaConta = $proximaConta;
    }

    protected abstract function filtra($contas);
    
    protected function filtraOutraConta(\Contas $contas) {
        if (!is_null($this->outroFiltro)) {
            return $outroFiltro->filtra($contas);
        }
    }
}
