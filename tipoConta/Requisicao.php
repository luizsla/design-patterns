<?php
/**
 * Description of Requisicao
 *  Classe que instancia um objeto que passará o parámetro da requisição.
 * @author Luiz Eduardo Amorim.
 */
class Requisicao {
    private $tipoRequisicao;
    private $cdRequisicao;
    
    function __construct($tipoRequisicao, $cdRequisicao) {
        $this->tipoRequisicao = $tipoRequisicao;
        $this->cdRequisicao = $cdRequisicao;
    }
    
    function getTipoRequisicao() {
        return $this->tipoRequisicao;
    }
    
    function getCdRequisicao() {
        return $this->cdRequisicao;
    }
}
