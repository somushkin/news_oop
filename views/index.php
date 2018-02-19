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
			<td><?php echo $item->title . News::$delim; ?></td>
			<td><?php echo $item->text ?></td>
		</tr>
		
		<?php endforeach; ?>
	
	</table>
	<br>
	<details>
		 <summary>Отладочная информация</summary>
		 <?php var_dump($items); ?>
	</details>
</body>
</html>