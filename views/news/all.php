	<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="2px">
		<tr>
			<th>Заголовок</th>
			<th>Новость</th>
		</tr>		
		
		<?php foreach ($items as $item) : ?>
		
		<tr>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->text; ?></td>
		</tr>
		
		<?php endforeach; ?>
	
	</table>
	<br>
	<a href="http://oop.mvc.news/?ctrl=News&act=One&id=1">Первая новость</a><br>
	<a href="http://oop.mvc.news/?ctrl=News&act=One&id=2">Вторая новость</a><br>
	<hr>
	<details>
		 <summary>Отладочная информация</summary>
		 <?php var_dump($items); ?>
	</details>
</body>
</html>