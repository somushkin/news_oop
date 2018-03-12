<?php

abstract class AbstractModel
	implements IModel
{
	protected static $table;

	public static function getTable()
	{
		return static::$table;
	}
	
	public static function findAll()
	{
		$class = get_called_class();
		$sql = "SELECT * FROM " . static::getTable();
		$db = new DB();
		$db->setClassName($class);
		return $db->query($sql);
	}
	
	public static function findOneByPk($id)
	{
		$class = get_called_class();
		$sql = "SELECT * FROM " . static::getTable() . " WHERE id=:id";
		$db = new DB();
		$db->setClassName($class);
		return $db->query($sql, [':id' => $id])[0];
	}
}

?>