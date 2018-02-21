<?php

class News 
{
	public $title;
	public $text;
	static public $delim = ': ';
	
	public static function getAll() 
	{
		$db = new DB();
		$sql = "SELECT title, text FROM news";
		return $db->queryAll($sql, 'News');
	}
	public static function getOne($id) 
	{
		$db = new DB();
		$sql = "SELECT title, text FROM news WHERE id=" . $id;
		return $db->queryOne($sql, 'News');
	}
}



?>