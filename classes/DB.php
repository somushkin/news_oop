<?php

class DB 
{
	public function __construct() 
	{
		$host = 'localhost';
		$login = 'root';
		$password = '';
		$dbname = 'news';
		mysql_connect($host, $login, $password);
		mysql_select_db($dbname);
	}

	public function queryAll($sql, $class = 'stdClass') 
	{
		$res = mysql_query($sql);
		$items = [];
		while (false !== $row = mysql_fetch_object($res, $class)) {
			$items[] = $row;
		}
		return $items;
	}

	public function queryOne($sql, $class = 'stdClass') 
	{
		return $this->queryAll($sql, $class)[0];		
	}
}

?>