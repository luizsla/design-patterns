<?php
/**
 * Description of Conta
 *  Classe que instacia o objeto conta para percorrer a cadeia de responsabilidade.
 * @author Luiz Eduardo Amorim.
 */
class Conta {
    private $titular;
    private $saldo;
    
    function __construct($titular, $saldo) {
        $this->saldo = $saldo;
        $this->titular = $titular;
    }
    
    function getSaldo() {
        return $this->saldo;
    }
    
    function getTitular() {
        return $this->titular;
    }
}
