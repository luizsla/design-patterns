<?php
    require_once 'Descontos.php';
/**
 * Description of DescontoPor5Itens
 *  Classe que realiza o desconto de uma compra caso a compra seja efetuada com
 * mais de 5 intens.
 * @author Luiz Eduardo Amorim.
 */
class DescontoPor5Itens implements Descontos {
    private $proximoDesconto;
    
    function aplicaDesconto(Orcamento $orcamento) {
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximoDesconto->aplicaDesconto($orcamento);
        }
    }
    
    function setProximo(Descontos $orcamento) {
        $this->proximoDesconto = $orcamento;
    }
}
