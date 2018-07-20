<?php
/* 
 *  Classe de teste do exercício de conta seguindo o padrão de projeto State.
 */

require_once("Conta.php");

$conta = new Conta(300.00);

$conta->saca(200);

$conta->saca(150);

echo $conta->getSaldo();

$conta->deposita(30);

echo $conta->getSaldo();

$conta->deposita(50);

echo $conta->getSaldo();

$conta->saca(10);

echo "<br>{$conta->getSaldo()}";


