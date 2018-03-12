<?php

class News 
	extends AbstractModel
{
	public $id;
	public $title;
	public $text;
	public static $delim = ': ';
	protected static $table = 'news';
	protected static $class = 'News';
}



?>