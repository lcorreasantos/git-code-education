<?php

namespace LET\Conta\Types;

use LET\Conta\ContaAbstract;

class ContaPremiumType extends ContaAbstract
{
	public function __construct()
	{
		$this->saldo += 10;
	}
		
	protected function calculoDeposito($valor)
	{
		return $valor += 20;
	}
}

?>