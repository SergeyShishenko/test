<section class="panel" id="SofiaUsers">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
        </div>

        <h2 class="panel-title">Пользователи</h2>
    </header>
    <div class="panel-body" style="display: block;">
        <table class="table table-bordered table-striped table-condensed mb-none">
            <thead>
                <tr>
                    <!-- <th class="text-right hidden-xs hidden-sm">user_sofia_id</th> -->
                    <th class="sticky-table ">id</th>
                    <th class="sticky-table hidden-xs hidden-sm">login</th>
                    <th class="sticky-table hidden-xs hidden-sm">mail</th>
                    <th class="sticky-table text-right">status</th>                    
                    <th class="sticky-table text-right hidden-xs">last page</th>
                    <th class="sticky-table text-right">date start</th>
                    <th class="sticky-table text-right">telephone</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php



	foreach($data as $row)
	{
		echo 
		'<tr>
            <td class="">'.$row[DBfield::usid].'</td>
			<td>'.$row[DBfield::usl].'</td>
			<td class="hidden-xs hidden-sm">'.$row[DBfield::usm].'.</td>
			<td class="text-right">'.$row[DBfield::usr].'</td>			
			<td class="text-right hidden-xs">'.$row[DBfield::uslp].'</td>
			<td class="text-right hidden-xs">'.$row[DBfield::ussds].'</td>
			<td class="text-right hidden-xs">'.$row[DBfield::usph].'</td>
			
		
		</tr>';
	}

	
?>
            </tbody>
        </table>
    </div>
</section>