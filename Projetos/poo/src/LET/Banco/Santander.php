<?php

namespace LET\Banco;

use \LET\Conta\ContaAbstract;

class Santander
{
	private $nome;
	private $conta;
	
	public function __construct(ContaAbstract $conta = null)
	{
		$this->conta = $conta;
	}
	
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function getConta()
	{
		return $this->conta;
	}
	
	public function setConta(ContaAbstract $conta)
	{
		$this->conta = $conta;
	}
}

?>