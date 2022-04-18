<?php
	$connection = new PDO('mysql:host=localhost; dbname=networktraffic; charset=utf8', 'root', '');

	$i = 0;
	$ot = $_POST["ot"];
	$do = $_POST["do"];
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
			   <caption>Отчет по трафику за указанный период</caption>
			   <tr>
				    <th>Номер</th>
				    <th>Имя</th>
				    <th>Количество входящего трафика</th>
				    <th>Количество исходящего трафика</th>
			   </tr>
			   
			<?php
				foreach($connection->query('SELECT * FROM `seanse` WHERE DATE(`start`) >= "' . $ot . '" AND DATE(`stop`) <= "' . $do . '"') as $row) {
					foreach($connection->query('SELECT * FROM client WHERE Id_Client = ' . $row['FID_Client']) as $col) {
				
				    	echo "<tr>
				    			  <td>" . ++$i . "</td>
				    			  <td>" . $col['name'] . "</td>
				    			  <td>" . $row['in_trafic'] . "</td>
				    			  <td>" . $row['out_trafic'] . "</td>
				    		 </tr>";
				}
			}
			?>
		</table>
		</div>
	</section>
</body>
</html>