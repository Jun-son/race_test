<?php
	
	$dataCars = file_get_contents("data_cars.json");
	$decodeCars = json_decode($dataCars, true); //декодированный массив таблицы
	$arrayCountCars = count($decodeCars); //кол-во участников
	$parentKeyCars = array_keys(json_decode($dataCars, true)); //ключ родительского класса


	$dataAttempts = file_get_contents("data_attempts.json");
	$decodeAttempts = json_decode($dataAttempts, true); //декодированный массив таблицы
	$arrayCountAttempts = count($decodeAttempts); //кол-во заездов
	$parentKeyAttempts = array_keys(json_decode($dataAttempts, true)); //ключ родительского класса
	$arraySort = array();
	$bigData = array('id'=>"", 'name'=>"", 'resultData'=>"", 'sumResultData'=>"");
	$bigDataName = array($bigData["name"]);
	$bigDataResult = array($bigData["resultData"]);
	$bigDataSum = array($bigData["sumResultData"]);
	$bigDataId = array($bigData["id"]);

	$i = 0; //кол-во заездов
	$countAttempts = 0;
	echo "<h2>Реультаты</h2>";
	for ($j=0; $j < $arrayCountAttempts; $j++) {
		$childArrayAttempts = $decodeAttempts[$parentKeyAttempts[$j]];
		if ($childArrayAttempts["id"] == $parentKeyAttempts[$i+1]) {
			$countAttempts += 1;
			}
	}

	echo "<table class=\"table_sort\">";
	echo "<thead><tr>
				<th>id</th>
				<th>Участник</th>";
		for ($i=0; $i < $countAttempts; $i++) { 
			echo "<th>Заезд №";
			echo $i + 1;
			echo "</th>";
		}
		echo "<th>Сумма очков</th>";
	echo "</tr></thead>";
	for ($i=0; $i < $arrayCountCars; $i++) { 
		$sumResult = 0;
		$childArrayCars = $decodeCars[$parentKeyCars[$i]];
		$bigDataId[] = $childArrayCars["id"];
		$bigDataName[] = $childArrayCars["name"];
		for ($j=0; $j < $arrayCountAttempts; $j++) {
			$childArrayAttempts = $decodeAttempts[$parentKeyAttempts[$j]];
			if ($childArrayAttempts["id"] == $parentKeyAttempts[$i+1]) {
				$sumResult += $childArrayAttempts["result"]; //сумма очков
				$bigDataResult[] = $childArrayAttempts["result"];
			}
		}
		$bigDataSum[] = $sumResult;

	} 
	echo "<tbody>";
	$t = 1;
	for ($n=1; $n < $arrayCountCars + 1 ; $n++) { 
		$j = 0;
		echo "<tr>";
			echo "<td>$bigDataId[$n]</td>";
			echo "<td>$bigDataName[$n]</td>";
			while ($j < $countAttempts) {
				echo "<td>$bigDataResult[$t]</td>";
				$j++;
				$t++;
			}
			echo "<td>$bigDataSum[$n]</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>