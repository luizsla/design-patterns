<?php
/**
 *
 * @author Luiz Eduardo Amorim.
 * Interface que estabelesce os métodos necessários para o funcionamento da cade
 * ia de descontos modelo chain of responsability.
 */
interface Descontos {
    public function aplicaDesconto(Orcamento $orcamento);
    public function setProximo(Descontos $orcamento);
}
