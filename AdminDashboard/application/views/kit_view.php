<section class="panel" id="Kit">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
        </div>

        <h2 class="panel-title">Комплекты фурнитуры</h2>
    </header>
    <div class="panel-body" style="display: block;">
        <table class="table table-bordered table-striped table-condensed mb-none">
            <thead>
                <tr >                  
                    <th class="sticky-table">ID</th>
                    <th class="sticky-table hidden-xs hidden-sm">ID ФУРНИТУРЫ</th>
                    <th class="sticky-table hidden-xs hidden-sm">ID ФУРНИТУРЫ ХОЗЯИНА</th>
                    <th class="sticky-table text-right">ID ФУРНИТУРЫ ИСПОЛЬЗУЕТСЯ С</th>                    
                    <th class="sticky-table text-right hidden-xs">КОЛИЧЕСТВО В КОМПЛЕКТЕ (ID ФУРНИТУРЫ)</th> 
                </tr>
            </thead>
            <tbody>
                <?php
	foreach($data as $row)
	{
		echo 
		'<tr>
            <td class="">'.$row['obj_owner_furnitur_id'].'</td>
			<td>'.$row['obj_furnitur_prop_id'].'</td>
			<td class="hidden-xs hidden-sm">'.$row['owner_obj_furnitur_prop_id'].'.</td>
			<td class="text-right">'.$row['used_with_obj_furnitur_prop_id'].'</td>			
			<td class="text-right hidden-xs">'.$row['number_in_set'].'</td>
	
		
		</tr>';
	}
	
?>
            </tbody>
        </table>
    </div>
</section>