<?php
// !other\PROBA\proba.php
function environment() {
    return 'developer';
}

class SomeClass {

    /**
     * Путь к файлу.
     *
     * @var string
     */
    private $filename;

    /**
     * Create a new Comment.
     */
    public function __construct() {
        $this->filename = "/var/www/" . environment() . "/engine/debugger.log";
    }

    /**
     * Get Путь.
     *
     * @return string
     */
    public function get_filename(){
        return $this->filename;
    }
}

$obj = new SomeClass;

echo $obj->get_filename();

// var_dump($obj);
?>