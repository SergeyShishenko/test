<h1>Портфолио</h1>
<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr>
	<th class="hidden-xs hidden-sm">Company</th>
	<th class="text-right">Price</th>
	<th class="text-right hidden-xs hidden-sm">Change</th>
	<th class="text-right hidden-xs">Change %</th>
	<th class="text-right">Open</th>
	<th class="text-right hidden-xs hidden-sm">High</th>
	<th class="text-right hidden-xs hidden-sm">Low</th>
	<th class="text-right">Volume</th>
</tr>
<?php

	foreach($data as $row)
	{
		echo 
		'<tr>
			<td>'.$row['Code'].'</td>
			<td class="hidden-xs hidden-sm">'.$row['Company'].'.</td>
			<td class="text-right">'.$row['Price'].'</td>
			<td class="text-right hidden-xs hidden-sm">'.$row['Change'].'</td>
			<td class="text-right hidden-xs">'.$row['Change %'].'</td>
			<td class="text-right">'.$row['Open'].'</td>
			<td class="text-right hidden-xs hidden-sm">'.$row['High'].'</td>
			<td class="text-right hidden-xs hidden-sm">'.$row['Low'].'</td>
			<td class="text-right">'.$row['Volume'].'</td>
		</tr>';
	}
	
?>
</table>
</p>
