<?php
	$connection = new PDO('mysql:host=localhost; dbname=networktraffic; charset=utf8', 'root', '');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<div class="first">
			<form action="first.php" method="post">
			   <p>
				   	<select size="1" name="id_Client">
				   		<?php 
					    	foreach($connection->query('SELECT * FROM client') as $row) {
					    		echo '<option value="' . $row['Id_Client'] . '">'. $row['name'] . '</option>';
							}
					    ?>
				   	</select>
				</p>
			   <p><input type="submit" value="Запросить статистику работы в сети выбранного клиента"></p>
			</form>
		</div>
		<div class="second">
			<form action="second.php" method="post">
				<input type="date" name="ot">
				<input type="date" name="do">
				<input type="submit" value="Вывести статистику работы в сети за указанный промежуток времени"></p>
			</form>
		</div>
		<div class="third">
			<form action="third.php">
				<input type="submit" value="Вывести список клиентов с отрицательным балансом счета"></p>
			</form>
		</div>
	</section>
</body>
</html>