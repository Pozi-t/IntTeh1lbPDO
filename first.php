<?php
	$connection = new PDO('mysql:host=localhost; dbname=networktraffic; charset=utf8', 'root', '');

	$id = $_POST["id_Client"];
	$i = 0;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<div>
			<table border="1">
			   <caption>Отчет по трафику пользователя</caption>
			   <tr>
			    <th>Номер</th>
			    <th>Время начала</th>
			    <th>Время окончания сеанса</th>
			    <th>Количество входящего трафика</th>
			    <th>Количество исходящего трафика</th>
			   </tr>
			   
			<?php
				foreach($connection->query('SELECT * FROM seanse WHERE FID_Client = ' . $id) as $row) {
			    	echo "<tr>
			    			  <td>" . ++$i . "</td>
			    			  <td>" . $row['start'] . "</td>
			    			  <td>" . $row['stop'] . "</td>
			    			  <td>" . $row['in_trafic'] . "</td>
			    			  <td>" . $row['out_trafic'] . "</td>
			    		 </tr>";
				}
			?>
		</table>
		</div>
	</section>
</body>
</html>