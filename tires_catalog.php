<html>
	<head>
		<meta charset="utf-8">
		<title>Шины</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <script src="order.js"></script>
	</head>
	<body>
		<table align = center id = cr>
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php"; ?>
			<?php
			$foto_tires = array("Michelin_Winter.JPG", "Continental_Winter.JPG", "Goodyear_Winter.JPG", "Pirelli_Summer.JPG", "Yokohama_Summer.JPG");
			$rez=mysql_query("Select * from tires");
			$i=0;
			$number_foto=0;
			while($tires=mysql_fetch_array($rez))
			{	
				if ($i % 2 == 0){
					$i=$i+1;
					echo "<tr class = d >
						<td style='font-size: 18pt'>";
					echo "<img src = $foto_tires[$number_foto] width = 240 height = 320>";
					printf("<p>%s %s (%sг)<br>Цена:%sР</p>", $tires['season'], $tires['stamp'], $tires['year'], $tires['price']);
					$number_foto=$number_foto+1;
					echo "<input type='button' value='Заказать' class = d onclick='dispatch();' style=' width: 100%; float: left; box-sizing: border-box;'>
					</td>";
				}
				else{
					$i=$i+1;
					echo "<td style='font-size: 18pt'>";
					echo "<img src = $foto_tires[$number_foto] width = 240 height = 320>";
					printf("<p>%s %s (%sг)<br>Цена:%sР</p>", $tires['season'], $tires['stamp'], $tires['year'], $tires['price']);
					$number_foto=$number_foto+1;
					echo "<input type='button' value='Заказать' class = d onclick='dispatch();' style=' width: 100%; float: left; box-sizing: border-box;'>
					</td>
						</tr>";
					}					
			}
			?>
			<?php include_once  "end_and_footer.php"; ?>
		</table>
	</body>
</html>