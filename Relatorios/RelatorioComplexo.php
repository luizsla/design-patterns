<?php
/**
 * Description of RelatorioComplexo
 *  Impressão de relatório complexo de acordo com template da classe Relatórios.
 * Extende Relatorios.
 * @author Luiz Eduardo Amorim.
 */
class RelatorioComplexo extends Relatorios {
    
    protected function cabecalho() {
        echo "Banco XYZ";
        echo "Avenida Paulista, 1234";
        echo "(11) 1234-5678";
      }

      protected function rodape() {
        echo "banco@xyz.com.br";
        echo date("d/m/Y"); 
      }

      protected function corpo($contas) {
        foreach($contas as $conta) {
          echo "{$conta->getNome()} - {$conta->getNumero()} - {$conta->getAgencia()} - {$conta->getSaldo()}";
        }
    }
}
