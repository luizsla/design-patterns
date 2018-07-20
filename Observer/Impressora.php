<?php
    require_once 'ExecutarAoCriar.php';
/**
 * Description of Impressora
 *  Classe PHP que recebe nota fiscal do padrão builder implementada pelo observer.
 * @author Luiz Eduardo Amorim
 */
class Impressora implements ExercutarAoCriar {
    
    public function execute(\NotaFiscal $objeto) {
        echo("<br>Nota fiscal recebida pela impressora!");
    }
}
