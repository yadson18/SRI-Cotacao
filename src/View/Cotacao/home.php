<?php  
	echo "<br><br><br><br><br><br><br>";
	$a = "";
	//foreach($cotacoes as $cotacao){
		foreach($cotacoes as $value){
			$a .= "<tr>";
			foreach($value as $column => $val){
				$a .= "<td>{$val}</td>";
			}
			
		}
		$a .= "</tr>";
	//}

	echo "<table>
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
				<th>d</th>
				<th>e</th>
				<th>e</th>
				<th>e</th>
			</tr>
		</thead>
		<tbody>
			{$a}
		</tbody>
	</table>";
?>