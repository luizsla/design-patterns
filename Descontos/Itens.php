<?php
/**
 * Description of Itens
 *  Classe PHP que serve de entidade para os itens comprados sob um orçamento pr
 * e estabelecido.
 * @author Luiz Eduardo Amorim.
 */
class Itens {
    private $nome;
    private $valor;
    
    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
    
    function getNome() {
        return $this->nome;
    }
    
    function getValor() {
        return $this->valor;
    }
}
