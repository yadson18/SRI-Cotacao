<section>
  <!--for demo wrap-->
  <h1>Cotações</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Code</th>
          <th>Company</th>
          <th>Price</th>
          <th>Change</th>
          <th>Change %</th>
          <th>Change</th>
          <th>Change %</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php  
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
				echo $a;
        ?>
      </tbody>
    </table>
  </div>
</section>