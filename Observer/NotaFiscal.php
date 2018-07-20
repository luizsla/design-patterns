<?php
/**
 * Classe que cria nota fiscal.
 * @author Luiz Eduardo Amorim
 */
class NotaFiscal {
    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    public $itens;
    public $observacoes;
    
    public function __construct($razaoSocial, $cnpj, $dataEmissao, $valorBruto,
            $impostos, $itens, $observacoes) {
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->dataDeEmissao = $dataEmissao;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->itens = $itens;
        $this->observacoes = $observacoes;
    }
    
    function getItens() {
        return $this->itens;
    }

    function getObservacoes() {
        return $this->observacoes;
    }
    
    function getValor() {
        return $this->valorBruto;
    }

    function setItens($itens) {
        $this->itens = $itens;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }
}
