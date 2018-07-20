<?php
/**
 * @author Luiz Eduardo Amorim
 * Interface que molda a classe de avaliador de leilão.
 */
interface AvaliadorInterface {
    public function avalia(\Leilao $leilao);
    public function calculaMedia(\Leilao $leilao);
}
