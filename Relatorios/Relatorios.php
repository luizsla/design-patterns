<?php
/**
 * Description of Relatorios
 *  Classe PHP para instanciar objetos do tipo relatórios.
 * @author Luiz Eduardo Amorim.
 */

abstract class Relatorios {
    protected abstract function cabecalho();
    protected abstract function rodape();
    protected abstract function corpo(Conta $contas);
    
    function imprimeRelatorio(Conta $conta) {
        $this->cabecalho();
        $this->corpo($conta);
        $this->rodape();
    }
}
