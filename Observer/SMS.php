<?php
    require_once 'ExecutarAoCriar.php';
/**
 * Description of SMS
 * Classe PHP que envia SMS quando uma nova nota fiscal é criada. É implementada
 * com o padrão de projeto Observer.
 *
 * @author Luiz Eduardo Amorim
 */
class SMS implements ExercutarAoCriar {
    public function execute(\NotaFiscal $objeto) {
        echo("<br>SMS do Objeto criado com sucesso!<br>");
    }
}
