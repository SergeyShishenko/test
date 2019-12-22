<?php
class ParseTPL
    {
        var $vars     = array();
        var $template;

        function get_tpl($tpl_name){
        if(empty($tpl_name) || !file_exists($tpl_name)){
            return false;
            }
        else{
            $this->template  = file_get_contents($tpl_name);
            }
        }

        function set_tpl($key,$var){     
        $this->vars[$key] = $var;
        }
        
        function tpl_parse(){      
        foreach($this->vars as $find => $replace){             
                $this->template = str_replace($find, $replace, $this->template);
                }
        }
    }

    // require('ParseTPL.php'); // Подключаем файл с классом
    // $parse = new ParseTPL;
    // $parse->get_tpl('template.tpl'); //Файл который мы будем парсить
    // $parse->set_tpl('{TITLE}','Супер сайт'); //Установка переменной {TITLE}
    // $parse->set_tpl('{BGCOLOR}','#F2F2F2'); //Установка переменной { BGCOLOR }
    // $parse->set_tpl('{SOMETPLTAGS}','<font color=red>Это текст
    // обрамленый красным  цветом</font>'); //Установка переменной {SOMETPLTAGS}
    // $parse->tpl_parse(); //Парсим
    // print $parse->template; //Выводим нашу страничку
?>

