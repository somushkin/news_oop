<?php

class DB 
{
	public function __construct($host, $login, $password, $dbname) 
	{
		mysql_connect($host, $login, $password);
		mysql_select_db($dbname);
	}

	public function query($sql, $class = 'stdClass') 
	{
		$res = mysql_query($sql);
		while (false !== $row = mysql_fetch_object($res, 'News')) {
			$items[] = $row;
		}
		return $items;
	}
}

?>