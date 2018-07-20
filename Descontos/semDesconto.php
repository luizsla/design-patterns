<?php
/**
 * Description of semDesconto
 *  Classe PHP que funciona como o laço final da cadeia de responsabilidade.
 * @author Luiz Eduardo Amorim.
 */
class semDesconto implements Descontos {
    function aplicaDesconto(\Orcamento $orcamento) {
        return 0;
    }
    
    function setProximo(\Descontos $orcamento) {
        //Classe vazia.
    }
}
