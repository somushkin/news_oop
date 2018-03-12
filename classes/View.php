<?php

class View
{
	protected $data = [];
	const PATH = __DIR__ . '/../views/';

	public function render($template)
	{
		foreach ($this->data as $key => $value) {
			$$key = $value;
		}
		ob_start();
		include View::PATH . $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
		/*
			функция подготавливает данные к выводу.
			перед выводом документа данные буферизируются, 
			где их можно предварительно обработать
		*/
	}

	public function display($template)
	{
		echo $this->render($template);
		// выводит обработанные данные в документ
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