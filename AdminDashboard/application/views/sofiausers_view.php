<section class="panel" id="SofiaUsers">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
        </div>

        <h2 class="panel-title">Sofia Users</h2>
    </header>
    <div class="panel-body" style="display: block;">
        <table class="table table-bordered table-striped table-condensed mb-none">
            <thead>
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
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>
</section>