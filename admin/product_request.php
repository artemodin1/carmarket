<html>
	<head>
		<meta charset="utf-8">
		<title>Добавление товара</title>
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
							<td colspan=3 class = d><h2>Добавление товара</h2>
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
										if(!(mysql_fetch_array($check))){
										$pr = mysql_query("INSERT INTO cars (stamp ,model ,year ,engine_capacity ,power ,price ) VALUES ('$stamp', '$model', '$year', '$engine_capacity', '$power', '$price')");
										if ($pr==true){
											echo "<p><u>Товар внесен в базу, необходимо добавить фотографию и отдельную страницу для него</u></p>";
										} else {echo "<p><u>Ошибка добавления</u></p>";}
									} else {echo "<p>Такой товар уже есть</p>";} }else
									{   $check = mysql_query("SELECT * FROM motorcycles WHERE stamp='$stamp' AND model='$model' AND year='$year' AND engine_capacity='$engine_capacity' AND power='$power' AND price='$price'"); 
										if(!(mysql_fetch_array($check))){
										$pr = mysql_query("INSERT INTO motorcycles (ID ,stamp ,model ,year ,engine_capacity ,power ,price)VALUES (NULL , '$stamp', '$model', '$year', '$engine_capacity', '$power', '$price');");
										if ($pr==true){
											echo "<p><u>Товар внесен в базу, необходимо добавить фотографию и отдельную страницу для него</u></p>";
										} else {echo "<p><u>Ошибка добавления</u></p>";}
									} else {echo "<p>Такой товар уже есть</p>";} }
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Запчасть'){
								if ($stamp!='' && $view!='' && $price!='' && $year!='')
								{		$check = mysql_query("SELECT * FROM details WHERE view='$view' AND stamp='$stamp' AND year='$year' AND price='$price'"); 
										if(!(mysql_fetch_array($check))){
											$pr = mysql_query("INSERT INTO details(ID, view, stamp, year, price) VALUES (NULL, '$view', '$stamp', '$year', '$price');");
											if ($pr==true){
												echo "<p><u>Товар внесен в базу, необходимо добавить фотографию для него</u></p>";
											} else {echo "<p><u>Ошибка добавления</u></p>";}
										} else {echo "<p>Такой товар уже есть</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Шины'){
								if ($stamp!='' && $season!=''&& $price!='' && $year!='')
								{	$check = mysql_query("SELECT * FROM tires WHERE stamp='$stamp' AND year='$year' AND season='$season' AND price='$price'"); 
									if(!(mysql_fetch_array($check))){
										$pr = mysql_query("INSERT INTO tires (ID, stamp, year, season, price) VALUES (NULL, '$stamp', '$year', '$season', '$price');");
											if ($pr==true){
												echo "<p><u>Товар внесен в базу, необходимо добавить фотографию для него</u></p>";
											} else {echo "<p><u>Ошибка добавления</u></p>";}
										} else {echo "<p>Такой товар уже есть</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							} else if ($type == 'Услуга'){
								if ($type_service!='' && $price!='')
								{	$check = mysql_query("SELECT * FROM services WHERE type='$type_service' AND price='$price'"); 
									if(!(mysql_fetch_array($check))){
									$pr = mysql_query("INSERT INTO services(ID, type, price) VALUES (NULL, '$type_service', '$price');");
										if ($pr==true){
											echo "<p><u>Товар внесен в базу, необходимо добавить фотографию для него</u></p>";
										} else {echo "<p><u>Ошибка добавления</u></p>";}
									} else {echo "<p>Такой товар уже есть</p>";}
								}
								else {
									echo '<p><u>Введены не все данные</u></p>';
								}
							}
							else {echo 'Нету типа!';}
							?>
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