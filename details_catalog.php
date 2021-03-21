<html>
	<head>
		<meta charset="utf-8">
		<title>Запчасти</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <script src="order.js"></script>
	</head>
	<body>
		<table align = center id = cr>
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php"; ?>
			<?php
			$foto_detail = array("Headlight.JPG", "Pads.JPG", "Filter.JPG", "Transmission.JPG");
			$rez=mysql_query("Select * from details");
			$i=0;
			$number_foto=0;
			while($details=mysql_fetch_array($rez))
			{	
				if ($i % 2 == 0){
					$i=$i+1;
					echo "<tr class = d >
						<td style='font-size: 18pt'>";
					echo "<img src = $foto_detail[$number_foto] width = 420 height = 320>";
					printf("<p>%s на %s %s года <br> Цена: %sР</p>", $details['view'], $details['stamp'],$details['year'],  $details['price']);
					$number_foto=$number_foto+1;
					echo "<input type='button' value='Заказать' class = d onclick='dispatch();' style=' width: 100%; float: left; box-sizing: border-box;'>
					</td>";
				}
				else{
					$i=$i+1;
					echo "<td style='font-size: 18pt'>";
					echo "<img src = $foto_detail[$number_foto] width = 420 height = 320>";
					printf("<p>%s на %s %s года <br> Цена: %sР</p>", $details['view'], $details['stamp'],$details['year'],  $details['price']);
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