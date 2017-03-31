<?php
/* Comentado para realizar commit */
namespace App;

use LETI\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function initRoutes()
	{
		$ar['home'] = array('route'=>'/mvc/public/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/mvc/public/empresa','controller'=>'index','action'=>'empresa');
		$this->setRoutes($ar);
	}

	public static function getDb()
	{
		$db = new \PDO("mysql:host=localhost;dbname=svc","root","root");
		return $db;
	}
}
?>