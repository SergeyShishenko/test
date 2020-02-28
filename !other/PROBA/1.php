<!DOCTYPE html>
<?php #!other\PROBA\1.php ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
		</tr>
		...
	</tbody>
</table>
<button class="btn">кнопка</button>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
          $('.btn').click(function(){
    // var tdVals = $('.table').find('tr > td').siblings('td').map(function(i, td){
    var tdVals = $('.table').find('tr').map(function(i, td){
      console.log($(td).text());
        return $(td).text();
     })
    // console.log(tdVals);
});
      </script>
</body>
</html> 