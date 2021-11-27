<?php

class class_ParseBills
{    
    private $page;
    private $arr_data = [];    

    public function __construct($address) {        
        $this->getUrlContent($address);
    }     

    private function getUrlContent($address): void{       
        $curl = curl_init($address);
        curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt ($curl, CURLOPT_HEADER, false);
        $this->page = curl_exec($curl);
        curl_close($curl);
    }

    public function getNews(){
        $news=explode('<!--Блок новостей-->', $this->page, -1)[1];
        $news=explode('<!--Блок новостей END-->', $news, -1)[0];  
        preg_match_all('|<tr[^>]+?class\s*?=\s*?["\']bizon_api_news_row["\'][^>]*?>(.+?)<\/tr>|su', $news, $res, PREG_PATTERN_ORDER);        

        foreach ($res[1] as $val) {
            preg_match_all('|([^\s].+?)<a[^>]+?href\s*?=\s*?["\'](.+?)["\'][^>]*?>(.+?)<\/a>|su', $val, $dat, PREG_PATTERN_ORDER);
            
            $s = explode(' ', $dat[1][0]);           
            $n['date']=  date('Y'). "-" . $s[14] . "-". $s[13] ;//год.месяц.день    
            $n['link']=trim($dat[2][0]);//ссылка
            $n['title']=trim($dat[3][0]);//заголовок
            array_push($this->arr_data,$n);
        }
        return $this->arr_data;
    }
}