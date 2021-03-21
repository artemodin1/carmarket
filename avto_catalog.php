<html>
	<head>
		<meta charset="utf-8">
		<title>Автомобили</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table align = center id = cr>
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php"; ?>
			<?php
			$foto_avto = array("M5.JPG", "RS5.JPG", "RIO.JPG", "Granta.JPG", "Passat.JPG", "Astra.JPG");
			$href_avto = array("M5.php", "RS5.php", "RIO.php", "Granta.php", "Passat.php", "Astra.php");
			$rez=mysql_query("Select * from cars");
			$i=0;
			$number_foto=0;
			while($cars=mysql_fetch_array($rez))
			{	
				if ($i % 2 == 0){
					$i=$i+1;
					echo "<tr class = d>
						<td style='font-size: 18pt'><a href=$href_avto[$number_foto]>";
					echo "<img src = $foto_avto[$number_foto] width = 420 height = 320></a>";
					printf("<p>%s %s %s</p>", $cars['stamp'], $cars['model'], $cars['year']);
					$number_foto=$number_foto+1;
					echo "</td>";
				}
				else{
					$i=$i+1;
					echo "<td style='font-size: 18pt'><a href=$href_avto[$number_foto]>";
					echo "<img src = $foto_avto[$number_foto] width = 420 height = 320></a>";
					printf("<p>%s %s %s</p>", $cars['stamp'], $cars['model'], $cars['year']);
					$number_foto=$number_foto+1;
					echo "</td>
						</tr>";
					}					
			}
			?>
			<?php include_once  "end_and_footer.php"; ?>
		</table>
	</body>
</html>