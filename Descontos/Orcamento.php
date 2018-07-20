<?php
/**
 * Description of Orcamento
 *  Classe PHP responsável por setar o orçamento para compra de materiais.
 * @author Luiz Eduardo Amorim.
 */
class Orcamento {
    private $valor;
    private $itens = array();
    
    function __construct($valor) {
        $this->valor = $valor;
    }
    
    function getValor() {
        return $this->valor;
    }
    
    function getItens() {
        return $this->itens;
    }
    
    function addItens($item) {
        $this->itens[] = $item;
    }
}
