<?php
    require_once 'ContaBancaria.php';
/**
 * Description of ContaPor%
 *  Classe componente da cadeia de responsabilidade que retorna a conta bancária
 * do usuáiro se ela for separada por porcentagem.
 * @author Luiz Eduardo Amorim.
 */
class ContaPorPorcetagem implements ContaBancaria {
   private $proximoFormato;
   
   function retornaFormato(Conta $conta, Requisicao $requisicao) {
       if ($requisicao->getCdRequisicao() == 1) {
           return "conta%titular%{$conta->getTitular()}%saldo%{$conta->getSaldo()}";
       } else {
           return $this->proximoFormato->retornaFormato($conta, $requisicao);
       }
    }
    
    function setProximo(ContaBancaria $conta) {
        $this->proximoFormato = $conta;
    }
}
