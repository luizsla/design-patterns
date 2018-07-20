<?php
/**
 * Description of Contas
 *  Classe PHP utlizada para instanciar objetos do tipo conta para serem decora
 * dos pelo padrão decorator. Instancia uma lista de contas em um Array.
 * @author Luiz Eduardo Amorim
 */
class Contas {
    private $contas = [];
    private $nome;
    private $saldo;
    private $data;
    
    public function __construct($nome, $saldo, $data) {
        $this->nome = $nome;
        $this->saldo = $saldo;
        $this->data = $data;
    }


    public function addConta(Contas $conta) {
        array_push($this->contas, $conta);
    }
    
    public function getContas() {
        return $this->contas;
    }
    
    public function getValor() {
        return $this->saldo;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getData() {
        return $this->data;
    }
}
