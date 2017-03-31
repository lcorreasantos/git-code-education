<?php
/* Retirei comandos obsoletos e comentados */
namespace App\Controllers;

use LETI\Controller\Action;
use \LETI\Di\Container;

class Index 
{
	public function index()
	{
		$srtigo = Container::getClass("Artgio");
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