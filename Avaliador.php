<?php
    require_once "AvaliadorInterface.php";
/**
 * Description of Avaliador
 *  Classe que avalia os lances do leilão.
 * @author Luiz Eduardo Amorim
 */
class Avaliador implements Avaliador {
    private $maiorLance = -INF;
    private $menorLance = INF;
    
    public function avalia(\Leilao $leilao) {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $maiorLance) {
                $this->maiorLance = $lance;
            }
            if ($lance->getValor() < $menorLance) {
                $this->menorLance = $lance;
            }
        }
    }
    
    public function calculaMedia(\Leilao $leilao) {
        $total = 0;
        foreach ($leilao->getLances() as $lance) {
            $total += $lance->getValor();
        }
        return $total/count($leilao->getLances());
    }
    
    public function getMaiorLance() {
        return $this->maiorLance;
    }
    
    public function getMenorLance() {
        return $this->menorLance;
    }
}
