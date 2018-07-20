<?php
    require_once 'ContaBancaria.php';
/**
 * Description of ContaPorXML
 *  Classe componete da cadeia de responsabilidade que retorna a contabancaria
 * separada por %.
 * @author Luiz Eduardo Amorim.
 */
class ContaPorXML implements ContaBancaria {
   private $proximoFormato;
   
   function retornaFormato(Conta $conta, Requisicao $requisicao) {
       if ($requisicao->getCdRequisicao() == 2) {
           return "<conta>"
                . "<titular>{$conta->getTitular()}</titular>"
                . "<saldo>{$conta->getSaldo()}</saldo>"
           . "</conta>";
       } else {
           return $this->proximoFormato->retornaFormato($conta, $requisicao);
       }
    }
    
    function setProximo(ContaBancaria $conta) {
        $this->proximoFormato = $conta;
    }
}
