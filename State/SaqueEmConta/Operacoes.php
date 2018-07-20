<?php
/**
 * Classe que controla os saques dos clientes de acordo com os diferentes estados
 * de inadimplência do mesmo.
 * @author Luiz Eduardo Amorim.
 */

interface StatusDaConta {
    public function deposita(Conta $conta, $valorDoDeposito);
    public function saca(Conta $conta, $valorDoSaque);
    public function mudaStatus(Conta $conta, $novoEstado);
}

class ContaPositiva implements StatusDaConta {
    public function deposita(Conta $conta, $valorDoDeposito) {
        $conta->setSaldo($conta->getSaldo() + ($valorDoDeposito * 0.98));
    }
    
    public function saca(Conta $conta, $valorDoSaque) {
        if ($conta->getSaldo() < $valorDoSaque) {
            $conta->setSaldo($conta->getSaldo() - $valorDoSaque);
            $this->mudaStatus($conta, new ContaNegativa());
        } else {
            $conta->setSaldo($conta->getSaldo() - $valorDoSaque);
        }
    }
    
    public function mudaStatus(Conta $conta, $novoEstado) {
        $conta->setEstado($novoEstado);
    }
}

class ContaNegativa implements StatusDaConta {
    public function deposita(Conta $conta, $valorDoDeposito) {
        if (abs($conta->getSaldo()) <= $valorDoDeposito) {
            $conta->setSaldo($conta->getSaldo() + ($valorDoDeposito * 0.95));
            $this->mudaStatus($conta, new ContaPositiva());
        } else {
            $conta->setSaldo($conta->getSaldo() + ($valorDoDeposito * 0.95));
            
        }
    }
    
    public function saca(Conta $conta, $valorDoSaque) {
        throw new Exception("Contas negativadas não aceitam saques.");
    }
    
    public function mudaStatus(Conta $conta, $novoEstado) {
        $conta->setEstado($novoEstado);
    }
}
