<?php

include "classes/class_ScanDir.php";

// $scan = new class_ScanDir("datafiles",'/[a-z0-9]+\.ixt/');

// $scan = new class_ScanDir("../../dist/images",'/shablon-alboma-dp_1(.*)/');
// $scan = new class_ScanDir("../../dist/images",'/shablon-kd_1(.*)/');
$scan = new class_ScanDir("../../dist/images",'/shablon-alboma-obrazcov-zapolnenie_1(.*)/');

// $scan->getScan();
// echo $scan->getNameFile();
echo '<img src="../../dist/images/'.$scan->getNameFile().'" alt="Лист титульный" style="width:1000px;">';
