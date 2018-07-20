<?php
    require_once 'ContaBancaria.php';
/**
 * Description of ContaPor;
 *  Classe componente da cadeia de responsabilidade que retorna os dados da cont
 * a bancária separados por ;.
 * @author Luiz Eduardo Amorim.
 */
class ContaPorVirgula implements ContaBancaria {
    private $proximoFormato;
   
    function retornaFormato(Conta $conta, Requisicao $requisicao) {
       if ($requisicao->getCdRequisicao() == 3) {
           return "conta;tutular;{$conta->getTitular()};saldo;{$conta->getSaldo()}";
       } else {
           return $this->proximoFormato->retornaFormato($conta, $requisicao);
       }
    }
    
    function setProximo(ContaBancaria $conta) {
        $this->proximoFormato = $conta;
    }
}
