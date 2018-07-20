<?php
    require_once "ExecutarAoCriar.php";
/**
 * Description of ImpessaoValor
 *  Classe PHP que implementa interface ExecutarAoCriar.php de acordo com padrão
 * observer.
 * @author Luiz Eduardo Amorim
 */
class ImpressaoValor implements ExercutarAoCriar {
    private $multiplicador;
    
    public function __construct() {
        $this->multiplicador = rand(1, 10);
    }
    
    public function execute(\NotaFiscal $objeto) {
        $novoValor = $objeto->getValor() * $this->multiplicador;
        echo("<br> O valor da nota fiscal é R$ {$novoValor} <br>");
    }

}
