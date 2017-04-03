<?php

namespace LET\Conta\Types;

use LET\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata
{
	protected function calculoDeposito($valor)
	{
		return $valor += 10;
	}
}

?>