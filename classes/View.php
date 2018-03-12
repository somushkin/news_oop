<?php

class View
{
	protected $data = [];
	const PATH = __DIR__ . '/../views/';

	public function display($template)
	{
		foreach ($this->data as $key => $value) {
			$$key = $value;
		}
		include View::PATH . $template;
//		var_dump($this);
	}
	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}
	
	public function __get($name)
	{
		return $data[$name];
	}
	
}

?>