<?php
// !other\XLS\simple.php
// header('Content-Type: text/html; charset=windows-1251');
header('Content-Type: text/html; charset=UTF-8');
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Content-transfer-encoding: binary');
header('Content-Disposition: attachment; filename=list.xls');
// header('Content-Type: application/x-unknown');
header('Content-Type: application/excel');

echo '
<table border="1">
<tr>
<td>
30 русский
</td>
<td>
30
</td
></tr>
</table>
';
?>