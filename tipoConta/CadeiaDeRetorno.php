<?php
    require_once 'ContaPorPorcentagem.php';
    require_once 'ContaPorXML.php';
    require_once 'ContaPorVirgula.php';
    require_once 'SemFormato.php';
/**
 * Description of CadeiaDeRetorno
 *  Classe que monta a cadeia de responsabilidade das contas com base no retorno.
 * @author Luiz Eduardo Amorim.
 */
class CadeiaDeRetorno {
    
    function procuraRetorno(Conta $conta, Requisicao $requisicao) {
        $contaPorcentagem = new ContaPorPorcetagem();
        $contaXML = new ContaPorXML();
        $contaVirgula = new ContaPorVirgula();
        $semFormato = new semFormato();
        
        
        $contaPorcentagem->setProximo($contaXML);
        $contaXML->setProximo($contaVirgula);
        $contaVirgula->setProximo($semFormato);
        
        $retornoFormato = $contaPorcentagem->retornaFormato($conta, $requisicao);
        return $retornoFormato;
    }
}
