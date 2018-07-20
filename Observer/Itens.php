<?php
/**
 * @author Luiz Eduardo Amorim
 */
class Itens {
    private $nome;
    private $valor;
    
    function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->valor = $preco;
    }
    
    public function getValor() {
        return $this->valor;
    }
}
