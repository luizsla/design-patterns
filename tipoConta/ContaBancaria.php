<?php
/**
 * Description of ContaBancaria.
 *  Interface que implementa várias contas bancárias na cadeia de responsabilida
 *de do retorno dos formatos da conta.  
 * @author Luiz Eduardo Amorim.
 */
interface ContaBancaria {
    function retornaFormato(Conta $conta, Requisicao $requisicao);
    function setProximo(ContaBancaria $conta);
}
