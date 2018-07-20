<?php
    require_once 'Descontos.php';
/**
 * Description of DescontoPor500Reais
 *  Classe que realiza o desconto de uma compra caso a compra efetuada tenha val
 * or igual ou maior a 500 reais.
 * @author Luiz Eduardo Amorim.
 */
class DescontoPor500Reais implements Descontos {
    private $proximoDesconto;
    
    function aplicaDesconto(Orcamento $orcamento) {
        if ($orcamento->getValor() >= 500) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $this->proximoDesconto->aplicaDesconto($orcamento);
        }
    }
    
    function setProximo(Descontos $orcamento) {
        $this->proximoDesconto = $orcamento;
    }
}
