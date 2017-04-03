<?php

require_once "ProcessoTrait.php";
require_once "ContaAbstract.php";
require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);

echo $conta->getSaldo();
?>