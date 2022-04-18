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
			   <caption>Должники</caption>
			   <tr>
			    <th>Имя</th>
			    <th>IP</th>
			    <th>Баланс</th>
			   </tr>
			   
			<?php
				foreach($connection->query('SELECT * FROM client WHERE balance < 0') as $row) {
			    	echo "<tr>
			    			  <td>" . $row['name'] . "</td>
			    			  <td>" . $row['IP'] . "</td>
			    			  <td>" . $row['balance'] . "</td>
			    		 </tr>";
				}
			?>
		</table>
		</div>
	</section>
</body>
</html>