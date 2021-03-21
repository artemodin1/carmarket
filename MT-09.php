<html>
	<head>
		<meta charset="utf-8">
		<title>Yamaha MT-10 SP</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <script src="order.js"></script>
	</head>
	<body>
		<table align = center id = cr> 
			<?php include_once  "connect_db.php" ?>
			<?php include_once  "menu.php";?>
			<?php
					$rez=mysql_query("SELECT *FROM motorcycles WHERE model = 'MT-10 SP'");
					
						echo "<tr>
							<td><img src = 'MT-09.jpg' width=100%></td>
						</tr>";
						while($MT=mysql_fetch_array($rez)){
						echo"<tr>
								<td rowspan=2 class = d>
									<table border=1px align=center width=100% style='text-align:center; color:white;'>
									<tr>
								<td>Марка</td>";
						printf("<td>%s</td>", $MT['stamp']);
						echo "</tr>
							<tr>
								<td>Модель</td>";
						printf("<td>%s</td>", $MT['model']);
						echo "</tr>
							<tr>
								<td>Год выпуска</td>";
						printf("<td>%s</td>", $MT['year']);
						echo "</tr>
							<tr>
								<td>Объём двигателя</td>";
						printf("<td>%s см<sup>3</sup></td>", $MT['engine_capacity']);
						echo "</tr>
							<tr>
								<td>Мощность двигателя</td>";
						printf("<td>%s л.с.</td>", $MT['power']);
						echo "</tr>
							<tr>
								<td>Цена (в рублях)</td>";
						printf("<td>%s</td>", $MT['price']);
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