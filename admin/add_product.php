<html>
	<head>
		<meta charset="utf-8">
		<title>Добавление товара</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <style>
			
		 </style>
	</head>
	<body link="red" vlink="#cecece" alink="#ff0000">
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
							<td colspan=3 class = d><h2>Добавление товара</h2>
							<form action=add_product.php method="post" name="form1">
								<p>Какой товар вы хотите добавить?</p>
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
							$type=$_POST["list1"];
							if ($type=='Автомобиль' || $type=='Мотоцикл'){
								echo '<form action=product_request.php method="post" name="form2">
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
								echo '<form action=product_request.php method="post" name="form3">
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
								echo '<form action=product_request.php method="post" name="form4">
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
								echo '<form action=product_request.php method="post" name="form5">
								<p>Вид услуги
								<input type=text size=60 name=type_service></p>
								<p>Цена
								<input type=int size=6 name=price></p>
								<p><input type=text size=10 name=type type=text READONLY value=' . $type . '></p>
								<p><input type="reset" value="Очистить всё"><input type="submit" value="Отправить"></p>
								</form>';
							}
							?> </td>
						</tr>
						<tr>
							<td colspan=3 class = d><a href='delete_product.php'>Удалить товар</a></td>
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