<!-- КОРЗИНА -->               
<div id="vpi"  >
<?php
    $dbconn=dbconnect();  
    /* изменение набора символов на utf8 */
    if (!mysqli_set_charset($dbconn, "utf8")) {
        printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
        exit();
    } else {
        //printf("Текущий набор символов: %s\n", mysqli_character_set_name($link));
    }

    if (file_exists($_SERVER['DOCUMENT_ROOT'].'/vpi/cart.php')) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/vpi/cart.php');// для сайта !!!!!!!
    }
    else {
        require_once($_SERVER['DOCUMENT_ROOT'].'/www/vpi/cart.php');// для localhost
    }
    mysqli_close($dbconn); 
    unset($GLOBALS['dbconn']);
?>
</div>                                 
<!-- КОРЗИНА -->
