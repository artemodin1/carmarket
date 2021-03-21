<html>
	<head>
		<meta charset="utf-8">
		<title>Услуги</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <script src="order.js"></script>
	</head>
	<body>
		<table align = center id = cr>
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php"; ?>
			<?php
			$foto_services = array("TO.JPG", "Washing.JPG", "Interior_Cleaning.JPG", "Tire_Change.JPG");
			$rez=mysql_query("Select * from services");
			$number_foto=0;
			while($services=mysql_fetch_array($rez))
			{	
					echo "<tr>
						<td class = d style='font-size: 18pt'>
						<img src = $foto_services[$number_foto] width = 850 height = 540>
						</td>
						</tr>
						<tr>
						<td class = d>";
					printf("<p>%s<br>Цена: %sР</p>", $services['type'], $services['price']);
					$number_foto=$number_foto+1;
					echo "<input type='button' value='Заказать' class = d onclick='dispatch();' style=' width: 100%; float: left; box-sizing: border-box;'>
					</td>
						</tr>";
			}					
			?>
			<?php include_once  "end_and_footer.php"; ?>
		</table>
	</body>
</html>