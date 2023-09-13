<?php

class A {

    public $name = "";

    public function __construct($name = "") {
        $this->name = name;
    }

    public function __destruct($name) {
        echo "chay vao ham destruct";
    }
}

$a = new A;
echo $a->name;

class database {

    function connect();

    function disconnect();

    public function __destruct() {
        $this->disconnect;
    }
}
