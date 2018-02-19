<?php

require_once __DIR__ . '/../classes/sql.php';

class News 
{
	public $title;
	public $text;
	static public $delim = ': ';
	
	public static function getAll() 
	{
		$db = new DB('localhost', 'root', '', 'news');
		$items = [];
		$sql = "SELECT title, text FROM news";
		return $db->query($sql);
	}
}



?>