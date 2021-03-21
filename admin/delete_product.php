<html>
	<head>
		<meta charset="utf-8">
		<title>Удаление товара</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <style>
			
		 </style>
	</head>
	<body link="red" vlink="#cecece" alink="#ff0000">
	<?php include_once  "connect_db.php" ?>
		<table align = center id = cr>
						<tr>
							<td><img src = "Фон.png" width = 900 height = 241></td>
						</tr>
						<tr id=menu>
							<td class=d>Зона администрирования<td>
						<tr>
						<tr>
							<td id = ts>
					<table id = menu>
						<tr>
							<td colspan=3 class = d><a href='admin.php'>Главная</a></td>
						</tr>
						<tr>
							<td colspan=3 class = d><a href='add_product.php'>Добавить товар</a></td>
						</tr>
						<tr>
							<td colspan=3 class = d><h2>Удаление товара</h2>
							<form action=delete_product.php method="post" name="form1">
								<p>Какой товар вы хотите удалить?</p>
								 <p><select name="list1">
								  <option>Выберите из списка</option>
								  <option>Автомобиль</option>
								  <option>Мотоцикл</option>
								  <option>Запчасть</option>
								  <option>Шины</option>
								  <option>Услуга</option>
								 </select></p>
								 <p><input type="submit" value="Ок"></p>
								</form>	
							<?php
							$type=$_POST['list1'];
							if ($type=='Автомобиль' || $type=='Мотоцикл'){
								echo '<h4>Введите все свойства того товара, который хотите удалить</h4>
								<form action=product_delete_request.php method="post" name="form2">
								<p>Марка
								<input type=text size=60 name=stamp></p>
								<p>Модель
								<input type=text size=60 name=model></p>
								<p>Объём двигателя
								<input type=float size=10 name=engine_capacity></p>
								<p>Мощность двигателя
								<input type=int size=6 name=power></p>
								<p>Год выпуска
								<input type=int size=6 name=year></p>
								<p>Цена
								<input type=int size=6 name=price></p>
								<p><input type=text size=10 name=type type=text READONLY value=' . $type . '></p>
								<p><input type="reset" value="Очистить всё"><input type="submit" value="Отправить"></p>
								</form>';
							} else if ($type == 'Запчасть'){
								echo '<h4>Введите все свойства того товара, который хотите удалить</h4>
								<form action=product_delete_request.php method="post" name="form3">
								<p>Тип запчасти
								<input type=text size=60 name=view></p>
								<p>На какую марку автомобиля эта запчасть
								<input type=text size=60 name=stamp></p>
								<p>Год выпуска
								<input type=int size=6 name=year></p>
								<p>Цена
								<input type=int size=6 name=price></p>
								<p><input type=text size=10 name=type type=text READONLY value=' . $type . '></p>
								<p><input type="reset" value="Очистить всё"><input type="submit" value="Отправить"></p>
								</form>';
							} else if ($type == 'Шины'){
								echo '<h4>Введите все свойства того товара, который хотите удалить</h4>
								<form action=product_delete_request.php method="post" name="form4">
								<p>Марка
								<input type=text size=60 name=stamp></p>
								<p>Сезон
								<input type=text size=60 name=season></p>
								<p>Год выпуска
								<input type=int size=6 name=year></p>
								<p>Цена
								<input type=int size=6 name=price></p>
								<p><input type=text size=10 name=type type=text READONLY value=' . $type . '></p>
								<p><input type="reset" value="Очистить всё"><input type="submit" value="Отправить"></p>
								</form>';
							} else if ($type == 'Услуга'){
								echo '<form action=product_delete_request.php method="post" name="form5">
								<h4>Введите все свойства того товара, который хотите удалить</h4>
								<p>Вид услуги
								<input type=text size=60 name=type_service></p>
								<p>Цена
								<input type=int size=6 name=price></p>
								<p><input type=text size=10 name=type type=text READONLY value=' . $type . '></p>
								<p><input type="reset" value="Очистить всё"><input type="submit" value="Отправить"></p>
								</form>';
							}
							?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td id = footer><p class = f>&copy;Артем Одинцов</p></td>
			</tr>
		</table>
	</body>
</html>