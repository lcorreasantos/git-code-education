<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new LET\Conta\Types\ContaType();
$conta->depositar(10);

$bancoSantander = new LET\Banco\Santander($conta);
$bancoSantander->setConta($conta);
$bancoSantander->setNome("Santander Exemplo");

echo $bancoSantander->getConta()->getSaldo();

echo $resultado = Math::somar(10, 10);

/* ========================================================
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Luciano", 45);
$pessoa2 = new Pessoa("Estela", 47);

echo $pessoa1->correr(50)."<br>";

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();
$produto->setNome("Tenis Exemplo")
				->setDescricao("Essa é a descrição do produto")
				->setEstoque(10)
				->setValor(1000);
*/

/*
$tenis = new Tenis();

if($tenis instanceof Produto){
	echo "É um tipo de tênis";
}else{
	echo "Não é um tipo de tênis";
}

require_once "TenisAdidas.php";
require_once "SapaTenis.php";

$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();
*/
?>