<?php
require_once 'NotaFiscal.php';

date_default_timezone_set('Brazil/East');

/**
 * Builder da classe NotaFiscal seguindo o padrão de projeto Builder.
 * @author Luiz Eduardo Amorim
 */

class NotaFiscalBuilder {
    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    public $itens;
    public $observacoes;
    private $observers; //Array de observadores.
    
    function __construct($observersList) {
        $this->dataDeEmissao = date("d/m/Y");
        $this->impostos = 0;
        $this->itens = [];
        $this->observers = $observersList;
    }
    
    function addObserver($observador) {
        $this->observers[] = $observador;
    }
    
    function paraEmpresa($nomeEmpresa) {
        $this->razaoSocial = $nomeEmpresa;
    }
    
    function comCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    
    function comDataDeEmissao($data) {
        $this->dataDeEmissao = $data;
    }
    
    function addIten($novoItem) {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor();
        $this->impostos += $novoItem->getValor() * 0.05;
    }
    
    function build() {
        if ($this->razaoSocial == Null || $this->cnpj == Null || count($this->itens) == 0) {
            throw new Exception("Não é possível imprimir notas fiscais com um dos"
                    . "parametros a seguir vazios: Razão Social, CNPj, Itens");
        } else {
            $nf = new NotaFiscal(
                    $this->razaoSocial,
                    $this->cnpj,
                    $this->dataDeEmissao,
                    $this->valorBruto,
                    $this->impostos,
                    $this->itens,
                    $this->observacoes
                    );
        }
        
        foreach ($this->observers as $observer) {
            $observer->execute($nf);
        }
        
        return $nf;
    }
    
    
}
