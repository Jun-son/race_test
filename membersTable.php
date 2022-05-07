<?php
	$dataCars = file_get_contents("data_cars.json");
	$decodeCars = json_decode($dataCars, true); //декодированный массив таблицы
	$arrayCountCars = count($decodeCars); //кол-во участников
	$parentKeyCars = array_keys(json_decode($dataCars, true)); //ключ родительского класса
	echo "<h2>Участники</h2>";
	echo "<table class=\"table_sort\">"; //все участники заездов, с указанием их ФИО, города и машины
	echo "<thead><tr>
			<th>id</th>
			<th>name</th>
			<th>city</th>
			<th>car</th>
			</tr></thead>";
	
	echo "<tbody>";
	for ($i=0; $i < $arrayCountCars ; $i++) { // номера игроков которые учавствуют

		echo "<tr><td>";
		$childArrayCars = $decodeCars[$parentKeyCars[$i]]; 
		echo $childArrayCars["id"]; // id участника
		echo "</td>";

		echo "<td>";
		echo $childArrayCars["name"]; // имя участника
		echo "</td>";

		echo "<td>";
		echo $childArrayCars["city"]; // город участника
		echo "</td>";

		echo "<td>";
		echo $childArrayCars["car"]; // автомобиль участника
		echo "</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
	echo "<br>";
?>