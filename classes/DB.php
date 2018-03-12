<?php

class DB 
{
	private $dbh;
	private $className = 'stdClass';

	public function __construct() 
	{
		/*
			создается объект PDO, который хранит в себе связь с БД.
			объект будет храниться в приватном свойстве $dbh
		*/
		$this->dbh = new PDO('mysql:dbname=news;host=localhost', 'root', '');
	}

	public function setClassName($className)
	{
		$this->className = $className;
	}

	public function query($sql, $params = [])
	{ 
		$sth = $this->dbh->prepare($sql);
		//	сойздается стейтмент, в который запишется результат подготовки запроса
		$sth->execute($params);
		// полнить запрос с указанными параметрами
		return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
	}

}

?>