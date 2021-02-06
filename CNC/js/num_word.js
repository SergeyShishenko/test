/**
 * Склонение существительных после числительных.
 * 
 * @param string $value Значение
 * @param array $words Массив вариантов, например: array('товар', 'товара', 'товаров')
 * @param bool $show Включает значение $value в результирующею строку
 * @return string
 */
function num_word($value, $words, $show = true) 
{
	$num = $value % 100;
	if ($num > 19) { 
		$num = $num % 10; 
	}
	
	// $out = ($show) ?  $value . ' ' : '';
    if ($show){
        $out = $value +" ";
    }else{
        $out = "";
    }
    
	switch ($num) {
		case 1:  $out = $out + $words[0];
         break;
		case 2: 
		case 3: 
		case 4:  $out  = $out +  $words[1];
         break;
		default: $out  = $out +  $words[2];
         break;
	}
	// $out=" "+$out;
	return $out;
}
// var arrvariant=['рубль', 'рубля', 'рублей'];
// var arrvariant=['файл', 'файла', 'файлов'];
var arrvariant=['файле', 'файлах', 'файлах'];
//test:
// for (let index = 0; index < 50; index++) {
//     console.log("в "+num_word(index,arrvariant ));    
// }
// console.log("в "+num_word(1,arrvariant ));//1 рубль
// console.log("в "+num_word(3, arrvariant)) ;//3 рубля
// console.log("в "+num_word(9, arrvariant)) ;//9 рублей
// console.log("в "+num_word(21, arrvariant)) ;//21 рубль
 



