<?php
class class_generator
{
    protected static $g;
    private static function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Обратите внимание, что $i сохраняет своё значение между вызовами.
            yield $i;
        }
    }
    
    public static function gen(){
        self::$g = self::gen_one_to_three();
    foreach (self::$g as $value) {
        echo "$value<br>";
    }  
    }
   
}
?>