<?php
/**
 * Description of Orcamento
 *  Classe que delimita o orçamento base para calculo de imposto.
 * @author Luiz Eduardo Amorim.
 */
require_once("Estado.php");

class Orcamento {
    private $valor;
    private $estado;
    
    function __construct($orcamento) {
        $this->valor = $orcamento;
        $this->estado = new EmAprovacao();
    }
    
    function getValor() {
        return $this->valor;
    }
    
    function setValor($valor) {
        $this->valor = $valor;
    }
    
    function setEstado($novoEstado) {
        $this->estado = $novoEstado;
    }
    
    function aplicaDesconto() {
        $this->estado->aplicaDesconto($this);
    }
    
    function aprova() {
        $this->estado->aprova($this);
    }
    
    function reprova() {
        $this->estado->reprova($this);
    }
    
    function finaliza() {
        $this->estado->finaliza($this);
    }
}
