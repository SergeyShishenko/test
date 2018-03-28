<?php
header ( "Content-type: application/vnd.ms-excel" );
header ( "Content-Disposition: attachment; filename=foo_bar.xls" );
echo "<table><tr><th>Header1</th></tr><tr><td>value1</td></tr></table>";
?>