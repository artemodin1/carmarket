<html>
	<head>
		<meta charset="utf-8">
		<title>KIA RIO</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <script src="order.js"></script>
	</head>
	<body>
		<table align = center id = cr> 
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php";?>
			<?php
					$rez=mysql_query("SELECT *FROM cars WHERE model = 'RIO'");
					while($RIO=mysql_fetch_array($rez)){
					
						echo "<tr>
							<td><img src = 'RIO.jpg' width=100%></td>
						</tr>";
						echo"<tr>
								<td rowspan=2 class = d>
									<table border=1px align=center width=100% style='text-align:center; color:white;'>
							<tr>
								<td>Марка</td>";
						printf("<td>%s</td>", $RIO['stamp']);
						echo "</tr>
							<tr>
								<td>Модель</td>";
						printf("<td>%s</td>", $RIO['model']);
						echo "</tr>
							<tr>
								<td>Год выпуска</td>";
						printf("<td>%s</td>", $RIO['year']);
						echo "</tr>
							<tr>
								<td>Объём двигателя</td>";
						printf("<td>%s л</td>", $RIO['engine_capacity']);
						echo "</tr>
							<tr>
								<td>Мощность двигателя</td>";
						printf("<td>%s л.с.</td>", $RIO['power']);
						echo "</tr>
							<tr>
								<td>Цена (в рублях)</td>";
						printf("<td>%s</td>", $RIO['price']);
						echo "</tr>
						</table>
						<input type='button' value='Оформить' class = d onclick='dispatch();' style=' width: 100%; float: left; box-sizing: border-box;'>
						</td>
						</tr>";
					}
			?>
			<?php include_once  "end_and_footer.php"; ?>
		</table>
	</body>
</html>