<?php

//class concho {
//
//    public static $static_variable = 6;
//
//    public $variable;
//
//    public static function run() {
//        
//    }
//}
//
//$a = new concho();
//$a->variable = 5;
//echo $a->variable;
//
//$b = new concho();
//$b->variable = 6;
//echo "<br>";
//echo $a->variable;
//echo $b->variable;
//
//echo concho::$static_variable;
//echo concho::run();

class database {

    public static $connect = null;

    public function __construct() {
        $this->connect;
    }

    public function connect() {
        //thuc hien connect den database
        if (self::$connect === NULL) {
            seft::$connect = mysql_connect();
        }
        return self::$connect;
    }
}

$a = new database; //khoi tao 1 connect den mysql
$b = new database;
//ban tao 1 bien static luu tru ket noi
//kiem tra bien static dc load hay chua
//neu chua thi load ket noi vao