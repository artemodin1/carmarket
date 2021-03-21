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
							<?php
							$stamp = trim(strip_tags($_REQUEST['stamp']));
							$model = $_REQUEST['model'];
							$engine_capacity = $_REQUEST['engine_capacity'];
							$power = $_REQUEST['power'];
							$year = $_REQUEST['year'];
							$view= $_REQUEST['view'];
							$season = $_REQUEST['season'];
							$price = $_REQUEST['price'];
							$type_service = $_REQUEST['type_service'];
							$type = $_REQUEST['type'];
							if ($type=='Автомобиль' || $type=='Мотоцикл'){
								if ($stamp!='' && $model!='' && $engine_capacity!=null && $power!=null && $price!=null && $year!=null)
								{
									if ($type == 'Автомобиль'){
										$check = mysql_query("SELECT * FROM cars WHERE stamp='$stamp' AND model='$model' AND year='$year' AND power='$power' AND price='$price'"); 
										if(mysql_fetch_array($check)){
										$pr = mysql_query("DELETE FROM cars WHERE stamp='$stamp' AND model='$model' AND year='$year' AND power='$power' AND price='$price'");
										if ($pr==true){
											echo "<p><u>Товар удален из базы, необходимо удалить его фотографию и отдельную страницу</u></p>";
										} else {echo "<p><u>Ошибка удаления</u></p>";}
									} else {echo "<p>Такого товара уже нет в базе</p>";} }else
									{   $check = mysql_query("SELECT * FROM motorcycles WHERE stamp='$stamp' AND model='$model' AND year='$year' AND engine_capacity='$engine_capacity' AND power='$power' AND price='$price'"); 
										if(mysql_fetch_array($check)){
										$pr = mysql_query("DELETE FROM motorcycles WHERE stamp='$stamp' AND model='$model' AND year='$year' AND engine_capacity='$engine_capacity' AND power='$power' AND price='$price'");
										if ($pr==true){
											echo "<p><u>Товар удален из базы, необходимо удалить его фотографию и отдельную страницу</u></p>";
										} else {echo "<p><u>Ошибка удаления</u></p>";}
									} else {echo "<p>Такого товара уже нет в базе</p>";} }
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Запчасть'){
								if ($stamp!='' && $view!='' && $price!='' && $year!='')
								{		$check = mysql_query("SELECT * FROM details WHERE view='$view' AND stamp='$stamp' AND year='$year' AND price='$price'"); 
										if(mysql_fetch_array($check)){
											$pr = mysql_query("DELETE FROM details WHERE view='$view' AND stamp='$stamp' AND year='$year' AND price='$price'");
											if ($pr==true){
												echo "<p><u>Товар удален из базы, необходимо удалить его фотографию</u></p>";
											} else {echo "<p><u>Ошибка удаления</u></p>";}
										} else {echo "<p>Такого товара уже нет в базе</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Шины'){
								if ($stamp!='' && $season!=''&& $price!='' && $year!='')
								{	$check = mysql_query("SELECT * FROM tires WHERE stamp='$stamp' AND year='$year' AND season='$season' AND price='$price'"); 
									if(mysql_fetch_array($check)){
										$pr = mysql_query("DELETE FROM tires WHERE stamp='$stamp' AND year='$year' AND season='$season' AND price='$price'");
											if ($pr==true){
												echo "<p><u>Товар удален из базы, необходимо удалить его фотографию</u></p>";
											} else {echo "<p><u>Ошибка удаления</u></p>";}
										} else {echo "<p>Такого товара уже нет в базе</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Услуга'){
								if ($type_service!='' && $price!='')
								{	$check = mysql_query("SELECT * FROM services WHERE type='$type_service' AND price='$price'"); 
									if(mysql_fetch_array($check)){
									$pr = mysql_query("DELETE FROM services WHERE type='$type_service' AND price='$price'");
										if ($pr==true){
											echo "<p><u>Товар удален из базы, необходимо удалить его фотографию</u></p>";
										} else {echo "<p><u>Ошибка удаления</u></p>";}
									} else {echo "<p>Такого товара уже нет в базе</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							}
							else {echo 'Нету типа!';}
							?> </td>
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