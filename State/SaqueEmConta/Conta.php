<?php
/**
 * Classe conta que representa contas bancárias.
 * @author Luiz Eduardo Amorim
 */

require_once 'Operacoes.php';

class Conta {
    private $valor;
    private $estado;
    
    function __construct($valor) {
        $this->valor = $valor;
        $this->estado = new ContaPositiva();
    }
    
    public function getSaldo() {
        return $this->valor;
    }
    
    public function setSaldo($novoSaldo) {
        $this->valor = $novoSaldo;
    }
    
    public function saca($valorDoSaque) {
        $this->estado->saca($this, $valorDoSaque);
    }
    
    public function deposita($valorDoDeposito) {
        $this->estado->deposita($this, $valorDoDeposito);
    }
    
    public function setEstado($novoEstado) {
        $this->estado = $novoEstado;
    }
}

