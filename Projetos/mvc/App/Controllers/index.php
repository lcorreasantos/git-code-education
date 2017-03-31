<?php

namespace App\Controllers;

use LETI\Controller\Action;
use \LETI\Di\Container;

class Index 
{
	public function index()
	{
		//$nomes = array();
		//$nomes[] = "Luciano";
		//$nomes[] = "Tiago";
		//// atribuindo para view
		//$this->view->nomes = $nomes;
		
		$srtigo = Container::getClass("Artgio");
		//$artigos = $artigo->fetchAll();
		$artigos = $artigo->find(1);
	
		$this->view->artigos = $artigos;
		
		// rendereizando
		$this->render('index');
	}

	public function empresa()
	{
		// rendereizando
		$this->render('empresa');
	}
}

?>