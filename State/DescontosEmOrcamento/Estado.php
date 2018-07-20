<?php
/**
 * Classes de Estado que controlam os diferentes estados de um orçamento de acordo
 * com o padrão de projeto State.
 * @author Luiz Eduardo Amorim
 */
interface Estado {
    public function aplicaDesconto(Orcamento $orcamento);
    public function aprova(Orcamento $orcamento);
    public function reprova(Orcamento $orcamento);
    public function finaliza(Orcamento $orcamento);
}


class EmAprovacao implements Estado {
    
    private $descontoAplicado = FALSE;
    
    public function aplicaDesconto(Orcamento $orcamento) {
        $valor = $orcamento->getValor();
        if ($this->descontoAplicado) {
            throw new Exception("Desconto já foi aplicado para esse estado!");
        } else {
            $orcamento->setValor($valor - $valor * 0.05);
            $this->descontoAplicado = TRUE;
        }
        
    }
    
    public function aprova(Orcamento $orcamento) {
        $orcamento->setEstado(new Aprovado());
    }
    
    public function reprova(Orcamento $orcamento) {
        $orcamento->setEstado(new Reprovado());
    }
    
    public function finaliza(Orcamento $orcamento) {
        throw new Exception("Estados em aprovação não podem ser finalizados.");
    }
}

class Aprovado implements Estado {
    private $descontoAplicado = FALSE;
    
    public function aplicaDesconto(Orcamento $orcamento) {
        $valor = $orcamento->getValor();
        
        if ($this->descontoAplicado) {
            throw new Exception("Desconto já foi aplicado para esse estado!");
        } else {
            $orcamento->setValor($valor - $valor * 0.2);
            $this->descontoAplicado = TRUE;
        }
        
    }
    
    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orçamento já se encontra aprovado. Operação inválida.");
    }
    
    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orcamentos aprovados não podem ser reprovados.");
    }
    
    public function finaliza(Orcamento $orcamento) {
        $orcamento->setEstado(new Finalizado());
    }
}

class Reprovado implements Estado {
    public function aplicaDesconto(Orcamento $orcamento) {
        throw new Exception("Orçamento finalizado não pode receber desconto!");
    }
    
    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orçamentos reprovados não podem ser aprovados!");
    }
    
    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orcamento já se encontra reprovado!");
    }
    
    public function finaliza(Orcamento $orcamento) {
        $orcamento->setEstado(new Finalizado());
    }
}

class Finalizado implements Estado {
    public function aplicaDesconto(Orcamento $orcamento) {
        throw new Exception("Orçemento finalizado não pode receber desconto!");
    }
    
    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orcamento finalizado não pode ser aprovado!");
    }
    
    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orcamento finalizado não pode ser reprovado!");
    }
    
    public function finaliza(Orcamento $orcamento) {
        throw new Exception("Orcamento já se encontra finalizado!");
    }
}
