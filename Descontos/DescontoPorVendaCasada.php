<?php
/**
 * Description of DescontoPorVendaCasada
 *  Classe PHP que aplica o desconto desejado caso compra contenha Lápis e canet
 * a na compra.
 * @author Luiz Eduardo Amorim.
 */
class DescontoPorVendaCasada implements Descontos {
    private $proximoDesconto;
    
    private function existe($nomeDoItem, Orcamento $orcamento) {
            foreach ($orcamento->getItens() as $item) {
                if($item->getNome() == $nomeDoItem) return true;
            }
            return false;
    }
    
    function aplicaDesconto(\Orcamento $orcamento) {
        if (existe("LAPIS", $orcamento) || existe("CANETA", $orcamento)) {
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximoDesconto->aplicaDesconto($orcamento);
        }
    }
    
    function setProximo(\Descontos $orcamento) {
        $this->proximoDesconto = $orcamento;
    }
}
