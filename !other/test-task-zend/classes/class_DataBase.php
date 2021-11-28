<?php
/**
 * Класс для работы с базой данных
 */
class class_DataBase 
{
    /**
     * Единственный экземпляр класса, чтобы не создавать множество подключений
     *
     * @var class_DataBase
     */
    private static $db = null;

    /**
     * Идентификатор соединения
     *
     * @var mysqli
     */
    private $mysqli;

    /**
     * Символ значения в запросе
     *
     * @var string
     */
    private $sym_query = "{?}"; 
    

    /**
     * Получение экземпляра класса. Если он уже существует,
     * то возвращается, если его не было, 
     * то создаётся и возвращается (паттерн Singleton)
     *
     * @return class_DataBase
     */
    public static function getDB() {
      if (self::$db == null) self::$db = new class_DataBase();
      return self::$db;
    }  

    /**
     * private-конструктор, подключающийся к базе данных, устанавливающий локаль и кодировку соединения
     */
    private function __construct() {
      $this->mysqli = new mysqli(class_DBoutput::dbHost, class_DBoutput::mysql_user, class_DBoutput::mysql_password, class_DBoutput::my_db);
      $this->mysqli->query("SET lc_time_names = 'ru_RU'");
      // $this->mysqli->query("SET NAMES 'utf8'");
      $this->mysqli->set_charset("utf8");
    }


  /**
   * Вспомогательный метод, который заменяет "символ значения в запросе" на конкретное значение, 
   * которое проходит через "функции безопасности"
   *
   * @param string $query
   * @param array $params
   * @return string
   */
  private function getQuery($query, $params) {
    if ($params) {
      for ($i = 0; $i < count($params); $i++) {
        $pos = strpos($query, $this->sym_query);
        $arg = "'".$this->mysqli->real_escape_string($params[$i])."'";
         $query = substr_replace($query, $arg, $pos, strlen($this->sym_query));
        //$query = str_replace($this->sym_query, $arg, $query);
    }
    }
    return $query;
  }

  
  /**
   * SELECT-метод, возвращающий таблицу результатов
   *
   * @param string $query
   * @param array|false $params
   * @return array
   */
  public function select($query, $params = false) {
    $result_set = $this->mysqli->query($this->getQuery($query, $params));
    if (!$result_set) return false;
    return $this->resultSetToArray($result_set);
  }

  /**
   * SELECT-метод, возвращающий одну строку с результатом 
   *
   * @param string $query
   * @param array|false $params
   * @return mixed
   */
  public function selectRow($query, $params = false) {
    $result_set = $this->mysqli->query($this->getQuery($query, $params));
    if ($result_set->num_rows != 1) return false;
    else return $result_set->fetch_assoc();
  }

  /**
   * SELECT-метод, возвращающий значение из конкретной ячейки
   *
   * @param string $query
   * @param array|false $params
   * @return mixed
   */
  public function selectCell($query, $params = false) {
    $result_set = $this->mysqli->query($this->getQuery($query, $params));
    if ((!$result_set) || ($result_set->num_rows != 1)) return false;
    else {
      $arr = array_values($result_set->fetch_assoc());
      return $arr[0];
    }
  } 

  /**
   * НЕ-SELECT методы (INSERT, UPDATE, DELETE). Если запрос INSERT, то возвращается id последней вставленной записи
   *
   * @param string $query
   * @param array|false $params
   * @return mixed
   */
  public function query($query, $params = false) {
    $success = $this->mysqli->query($this->getQuery($query, $params));
    if ($success) {
      if ($this->mysqli->insert_id === 0) return true;
      else return $this->mysqli->insert_id;
    }
    else {
      echo "<br>".mysqli_error($this->mysqli)."<br>";
      return false;
    }
  }

  /**
   * Преобразование result_set в двумерный массив
   *
   * @param mysqli_result $result_set
   * @return array
   */
  private function resultSetToArray($result_set) {
    $array = array();
    while (($row = $result_set->fetch_assoc()) != false) {
      $array[] = $row;
    }
    return $array;
  }
  
  /**
   * Экранирует специальные символы в строке
   *
   * @param string $var
   * @return mysqli_real_escape_string
   */
  public function realEscape($var){
    return mysqli_real_escape_string($this->mysqli, $var);
  }

  /**
   *  Создает таблицу bills_ru_events
   *
   * @return void
   */
  public function cteate_table_bills_ru_events(){
    $query = "CREATE TABLE IF NOT EXISTS bills_ru_events(
      id INT NOT NULL AUTO_INCREMENT,
      -- date_news DATETIME , 
      date_news DATETIME NOT NULL , 
      title_news VARCHAR(230) , 
      url_news VARCHAR(240) , 
      UNIQUE (url_news),
      PRIMARY KEY (id))";     
  
    if (mysqli_query($this->mysqli, $query)) return "Таблица bills_ru_events создана.<br>";
    else return "Таблица bills_ru_events не создана: ".mysqli_error($this->mysqli);

  }
  

  /**
   * При уничтожении объекта закрывается соединение с базой данных
   */
  public function __destruct() {
    if ($this->mysqli) $this->mysqli->close();
  }
}


?>