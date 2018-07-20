<?php
/**
 * Description of semFormato
 *  Classe da cadeia de responsabilidade que representa o nó final da cadeia.
 * @author Luiz Eduardo Amorim.
 */
class SemFormato implements ContaBancaria {
    function retornaFormato(Conta $conta, Requisicao $requisicao) {
        //faz nada.
    }
    
    function setProximo(ContaBancaria $conta) {
        //faz nada.
    }
}
