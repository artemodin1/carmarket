<html>
	<head>
		<meta charset="utf-8">
		<title>Мотоциклы</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table align = center id = cr>
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php"; ?>
			<?php
			$foto_moto = array("HP4.JPG", "1250RT.JPG", "MT-09.JPG", "URAL.JPG");
			$href_moto = array("HP4.php", "1250RT.php", "MT-09.php", "URAL.php");
			$rez=mysql_query("Select * from motorcycles");
			$i=0;
			$number_foto=0;
			while($moto=mysql_fetch_array($rez))
			{	
				if ($i % 2 == 0){
					$i=$i+1;
					echo "<tr class = d >
						<td style='font-size: 18pt'><a href=$href_moto[$number_foto]>";
					echo "<img src = $foto_moto[$number_foto] width = 420 height = 320></a>";
					printf("<p>%s %s %s</p>", $moto['stamp'], $moto['model'], $moto['year']);
					$number_foto=$number_foto+1;
					echo "</td>";
				}
				else{
					$i=$i+1;
					echo "<td style='font-size: 18pt'><a href=$href_moto[$number_foto]>";
					echo "<img src = $foto_moto[$number_foto] width = 420 height = 320></a>";
					printf("<p>%s %s %s</p>", $moto['stamp'], $moto['model'], $moto['year']);
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