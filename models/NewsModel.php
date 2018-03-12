<?php

class NewsModel
	extends AbstractModel
{
	public $id;
	public $title;
	public $text;
	protected static $table = 'News';
}

?>