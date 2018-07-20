<?php
/**
 * Description of RelatorioSimples
 *  Impressão de relatório simples de acordo com template da classe Relatórios.
 * Extende Relatorios.
 * @author Luiz Eduardo Amorim.
 */
class RelatorioSimples extends Relatorios {
    
    protected function cabecalho() {
        echo "Banco Luizinho :D";
        echo "<br>";
    }
    
    protected function rodape() {
        echo "(77 99179-7550)";
    }
    
    protected function corpo(Conta $contas) {
        foreach ($contas as $conta) {
            echo "{$conta->getNome()} - {$conta->getSaldo()}";
            echo "<br>";
        }
    }
}
