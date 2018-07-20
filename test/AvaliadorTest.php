<?php
    require_once "Avaliador.php";
    require_once "Lance.php";
    require_once "Leilao.php";
    require_once "Usuario.php";

/**
 * Description of AvaliadorTest
 *  Classe test de avaliador // Método de teste -> TDD.
 * @author Luiz Eduardo Amorim
 */

class AvaliadorTest {
    
    public function testAvaliaMaiorEMenor() PHPUnit_Framework_TestCase {
        //Cria usuários do leilão.
        $joao = new Usuario("João");
        $maria = new Usuario("Maria");
        $jose = new Usuario("José");
        
        //Cria Lances.
        $lance1 = new Lance($jose, 250);
        $lance2 = new Lance($maria, 400);
        $lance4 = new Lance($joao, 500);
        $lance5 = new Lance($maria, 700);
        
        //Cria novo leilão.
        $leilaoDePintura = new Leilao("Leilão de Pintura");
        $leilaoDePintura->propoe($lance1);
        $leilaoDePintura->propoe($lance2);
        $leilaoDePintura->propoe($lance3);
        $leilaoDePintura->propoe($lance4);
        $leilaoDePintura->propoe($lance5);
        
        //Instancia avalaidor.
        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilaoDePintura);
    }
    
    public function testAvaliaMediaLances() {
        //Cria usuários do leilão.
        $joao = new Usuario("João");
        $maria = new Usuario("Maria");
        $jose = new Usuario("José");
        
        //Cria Lances.
        $lance1 = new Lance($jose, 250);
        $lance2 = new Lance($maria, 400);
        $lance3 = new Lance($joao, 500);
        $lance4 = new Lance($maria, 700);
        
        //Cria novo leilão.
        $leilaoDePintura = new Leilao("Leilão de Pintura");
        $leilaoDePintura->propoe($lance1);
        $leilaoDePintura->propoe($lance2);
        $leilaoDePintura->propoe($lance3);
        $leilaoDePintura->propoe($lance4);
        
        //Instancia o avaliador.
        $leiloeiro = new Avaliador();
        $leiloeiro->calculaMedia($leilaoDePintura);
        
        //Resultado esperado.
        $resultadoEsperado = 462.5;
        
        //Testa funcionalidade.
    }
    
    
}
